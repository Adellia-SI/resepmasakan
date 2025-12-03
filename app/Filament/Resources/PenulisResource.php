<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenulisResource\Pages;
use App\Models\Penulis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PenulisResource extends Resource
{
    protected static ?string $model = Penulis::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $modelLabel = 'Penulis Resep';
    protected static ?string $navigationLabel = 'Penulis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_penulis')
                    ->label('Nama Lengkap Penulis')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('email')
                    ->label('Email Penulis')
                    ->email()
                    ->required()
                    ->maxLength(150),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable(),

                Tables\Columns\TextColumn::make('nama_penulis')
                    ->label('Nama Penulis')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListPenulis::route('/'),
            'create' => Pages\CreatePenulis::route('/create'),
            'edit' => Pages\EditPenulis::route('/{record}/edit'),
        ];
    }
}
