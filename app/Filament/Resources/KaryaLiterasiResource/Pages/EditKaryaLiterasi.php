<?php

namespace App\Filament\Resources\KaryaLiterasiResource\Pages;

use App\Filament\Resources\KaryaLiterasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKaryaLiterasi extends EditRecord
{
    protected static string $resource = KaryaLiterasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
