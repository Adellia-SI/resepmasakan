<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResepResource\Pages;
use App\Models\Resep;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;         // 🔹 IMPORT UNTUK FOTO DI TABLE
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;        // 🔹 IMPORT UNTUK UPLOAD FOTO

class ResepResource extends Resource
{
    protected static ?string $model = Resep::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $modelLabel = 'Data Resep';
    protected static ?string $navigationLabel = 'Resep';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(200)
                    ->label('Judul Resep')
                    ->columnSpan(2),

                Forms\Components\Group::make()
                    ->schema([
                        Select::make('kategori_id')
                            ->label('Kategori')
                            ->relationship('kategori', 'nama_kategori')
                            ->required(),

                        Select::make('penulis_id')
                            ->label('Penulis')
                            ->relationship('penulis', 'nama_penulis')
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpan(2),

                //  FIELD UPLOAD FOTO MASAKAN
                FileUpload::make('foto')
                    ->label('Foto Masakan')
                    ->image()
                    ->directory('resep')   // disimpan di storage/app/public/resep
                    ->disk('public')
                    ->imageEditor()
                    ->nullable()
                    ->columnSpan(2),

                RichEditor::make('bahan')
                    ->required()
                    ->label('Bahan-bahan')
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'italic',
                        'bulletList',
                        'orderedList',
                        'undo',
                        'redo',
                    ])
                    ->columnSpan(2),

                RichEditor::make('langkah')
                    ->required()
                    ->label('Langkah-langkah Memasak')
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'italic',
                        'bulletList',
                        'orderedList',
                        'undo',
                        'redo',
                    ])
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // THUMBNAIL FOTO DI TABEL
                ImageColumn::make('foto')
                    ->label('Foto')
                    ->square()
                    ->size(60),

                TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->sortable(),

                TextColumn::make('penulis.nama_penulis')
                    ->label('Penulis')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->relationship('kategori', 'nama_kategori'),
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
            'index' => Pages\ListReseps::route('/'),
            'create' => Pages\CreateResep::route('/create'),
            'edit' => Pages\EditResep::route('/{record}/edit'),
        ];
    }
}
