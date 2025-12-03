<?php

namespace App\Filament\Resources\PenulisResource\Pages;

use App\Filament\Resources\PenulisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenulis extends EditRecord
{
    protected static string $resource = PenulisResource::class;

    protected static ?string $title = 'Edit Penulis Resep';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus'),
        ];
    }
}
