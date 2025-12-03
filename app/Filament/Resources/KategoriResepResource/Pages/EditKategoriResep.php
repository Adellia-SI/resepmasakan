<?php

namespace App\Filament\Resources\KategoriResepResource\Pages;

use App\Filament\Resources\KategoriResepResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriResep extends EditRecord
{
    protected static string $resource = KategoriResepResource::class;

    protected static ?string $title = 'Edit Kategori Resep';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus'),
        ];
    }
}
