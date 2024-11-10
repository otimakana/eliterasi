<?php

namespace App\Filament\Resources\KaryaLiterasiResource\Pages;

use App\Filament\Resources\KaryaLiterasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKaryaLiterasis extends ListRecords
{
    protected static string $resource = KaryaLiterasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
