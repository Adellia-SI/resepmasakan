<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriResep extends Model
{
    use HasFactory;
    protected $table = 'kategori_resep';
    protected $fillable = [
        'nama_kategori',
    ];

    public function resep(): HasMany
    {
        return $this->hasMany(Resep::class, 'kategori_id');
    }
}
