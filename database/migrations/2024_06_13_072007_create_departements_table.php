<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kode_wilayah');
            $table->string('alamat');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });

        // Masukkan data default
        DB::table('departements')->insert([
            'name' => 'WEST INDONESIA UNION MISSION',
            'kode_wilayah' => 'A90-UIKB',
            'alamat' => 'Gedung Pertemuan Advent, Jl.Letjen MT Haryono Blok A kav. 4-5 Tebet Barat, Tebet Jakarta Selatan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departements');
    }
};
