<?php

namespace App\Filament\Resources\KategoriResepResource\Pages;

use App\Filament\Resources\KategoriResepResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriReseps extends ListRecords
{
    protected static string $resource = KategoriResepResource::class;

    protected static ?string $title = 'Daftar Kategori Resep';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Kategori'),
        ];
    }
}
