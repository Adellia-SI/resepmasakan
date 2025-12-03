<?php

namespace App\Filament\Resources\PenulisResource\Pages;

use App\Filament\Resources\PenulisResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePenulis extends CreateRecord
{
    protected static string $resource = PenulisResource::class;

    protected static ?string $title = 'Tambah Penulis Resep';
}
