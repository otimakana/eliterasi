<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LiterasiResource\Pages;
use App\Filament\Resources\LiterasiResource\RelationManagers;
use App\Models\Literasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Forms\Components\DateTimePicker;
use Carbon\Carbon;
use Illuminate\Support\Carbon as SupportCarbon;

class LiterasiResource extends Resource
{
    protected static ?string $model = Literasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                // ->afterStateUpdated(fn(Set $set, ?string $state )=> $set('slug', Str::slug($state)))
                // ->live(debounce: 250)
                ->required(),

                // Forms\Components\TextInput::make('slug')
                // ->required()
                // ->disabled(),

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

                DateTimePicker::make('start_datetime')
                ->label('Waktu Mulai')
                ->required(),

                DateTimePicker::make('end_datetime')
                ->label('Waktu Selesai')
                ->after('start_datetime')
                ->required(),


                Forms\Components\TextInput::make('tautan_siswa')
                ->label('Link Siswa')
                ->required()
                ->activeUrl(),

                Forms\Components\TextInput::make('tautan_guru')
                ->label('Link Guru')
                ->required()
                ->activeUrl(),

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

                // TinyEditor::make('content')
                // ->fileAttachmentsDisk('public')
                // ->fileAttachmentsVisibility('public')
                // ->fileAttachmentsDirectory('uploads')
                // ->profile('default|simple|full|minimal|none|custom')
                // ->rtl() // Set RTL or use ->direction('auto|rtl|ltr')
                // ->columnSpan('full')
                // ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                ->searchable(),

                Tables\Columns\TextColumn::make('author.name')
                ->searchable(),

                Tables\Columns\TextColumn::make('start_datetime')
                ->datetime(),

                Tables\Columns\TextColumn::make('end_datetime')
                ->datetime(),

                Tables\Columns\IconColumn::make('is_active')
                ->label('Active'),

                // Tables\Columns\TextColumn::make('start_now')
                //     ->label('Status')
                //     ->badge()
                //     ->getStateUsing(function ($record) {
                //         return $record->startNow() ? 'Tidak Aktif' : 'Aktif';
                //     })
                //     ->color(fn (string $state): string => match ($state) {
                //         'Aktif' => 'success',
                //         'Tidak Aktif' => 'danger',
                //     })

                // Tables\Columns\IconColumn::make('is_active')->label('Status')
                // ->getStateUsing(fn ($record) => Carbon::now()->between($record->start_datetime, $record->end_datetime)),


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
            'index' => Pages\ListLiterasis::route('/'),
            'create' => Pages\CreateLiterasi::route('/create'),
            'edit' => Pages\EditLiterasi::route('/{record}/edit'),
        ];
    }
}