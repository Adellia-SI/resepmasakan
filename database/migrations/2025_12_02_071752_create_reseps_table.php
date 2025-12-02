<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 200);
            $table->text('bahan');
            $table->text('langkah');
            $table->foreignId('kategori_id')->constrained('kategori_resep');
            $table->foreignId('penulis_id')->constrained('penulis');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
