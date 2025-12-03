<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriResepResource\Pages;
use App\Filament\Resources\KategoriResepResource\RelationManagers;
use App\Models\KategoriResep;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class KategoriResepResource extends Resource
{
    protected static ?string $model = KategoriResep::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $modelLabel = 'Kategori Resep';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kategori')
                    ->required()
                    ->maxLength(100)
                    ->label('Nama Kategori Resep'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nama_kategori')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoriReseps::route('/'),
            'create' => Pages\CreateKategoriResep::route('/create'),
            'edit' => Pages\EditKategoriResep::route('/{record}/edit'),
        ];
    }


    public static function getNavigationLabel(): string
    {
        return 'Kategori';
    }
}
