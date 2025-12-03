<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'reseps';

    protected $fillable = [
        'judul',
        'bahan',
        'langkah',
        'kategori_id',
        'penulis_id',
        'foto',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriResep::class, 'kategori_id');
    }

    public function penulis(): BelongsTo
    {
        return $this->belongsTo(Penulis::class, 'penulis_id');
    }
}
