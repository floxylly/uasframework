<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopsisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('adopsis', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->unsignedBigInteger('hewan_id'); // Kolom hewan_id (foreign key)
            $table->string('nama_pengadopsi'); // Kolom nama pengadopsi
            $table->string('email'); // Kolom email
            $table->string('telepon'); // Kolom telepon
            $table->text('alamat'); // Kolom alamat
            $table->timestamps(); // Kolom created_at dan updated_at otomatis

            // Foreign key constraint (opsional)
            $table->foreign('hewan_id')->references('id')->on('hewans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopsis');
    }

};
