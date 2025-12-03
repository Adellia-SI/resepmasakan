<?php

namespace App\Filament\Resources\KategoriResepResource\Pages;

use App\Filament\Resources\KategoriResepResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriResep extends CreateRecord
{
    protected static string $resource = KategoriResepResource::class;

    protected static ?string $title = 'Tambah Kategori Resep';
}
