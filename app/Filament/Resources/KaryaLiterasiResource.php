<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KaryaLiterasiResource\Pages;
use App\Filament\Resources\KaryaLiterasiResource\RelationManagers;
use App\Models\KaryaLiterasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;

class KaryaLiterasiResource extends Resource
{
    protected static ?string $model = KaryaLiterasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Judul')
                // ->afterStateUpdated(fn(Set $set, ?string $state )=> $set('slug', Str::slug($state)))
                // ->live(debounce: 250)
                ->required(),

                Forms\Components\TextInput::make('nama_siswa')
                ->label('Nama Siswa')
                ->required(),

                Forms\Components\TextInput::make('kelas')
                ->label('Kelas')
                ->required(),


                Forms\Components\FileUpload::make('thumbnail')
                ->required()
                ->image(),

                Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->searchable()
                ->preload()
                ->required(),

                Forms\Components\Select::make('author_id')
                ->relationship('author', 'name')
                ->searchable()
                ->preload()
                ->required(),

                DatePicker::make('tanggal')
                ->format('d/m/y'),


                RichEditor::make('content')
                ->columnSpanFull()
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletLits',
                    'codeBlock',
                    'h1',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'undo',
                    'strike',
                    'underLine',
                    'align',
                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Judul'),
                Tables\Columns\TextColumn::make('nama_siswa')
                ->searchable(),
                Tables\Columns\TextColumn::make('kelas'),
                Tables\Columns\TextColumn::make('tanggal')
                ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKaryaLiterasis::route('/'),
            'create' => Pages\CreateKaryaLiterasi::route('/create'),
            'edit' => Pages\EditKaryaLiterasi::route('/{record}/edit'),
        ];
    }
}