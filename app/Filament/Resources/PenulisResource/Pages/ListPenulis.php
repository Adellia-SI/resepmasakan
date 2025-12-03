<?php

namespace App\Filament\Resources\PenulisResource\Pages;

use App\Filament\Resources\PenulisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenulis extends ListRecords
{
    protected static string $resource = PenulisResource::class;

    protected static ?string $title = 'Daftar Penulis Resep';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Penulis'),
        ];
    }
}
