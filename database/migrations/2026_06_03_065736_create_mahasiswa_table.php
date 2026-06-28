<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->id();('no');
        $table->string('nim');
        $table->string('nama');
        $table->string('jurusan');
        $table->decimal('ipk', 3, 2);
        $table->timestamps();
    });
}
};
