<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penulis extends Model
{
    use HasFactory;

    protected $table = 'penulis';

    protected $fillable = [
        'nama_penulis',
        'email',
    ];

    public function resep(): HasMany
    {
        return $this->hasMany(Resep::class, 'penulis_id');
    }
}
