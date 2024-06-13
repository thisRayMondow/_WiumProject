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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->default(false);
            $table->integer("dept_id");
        });

        // Masukkan data default
        DB::table('users')->insert([
            'name' => 'ADMIN',
            'username' => 'ADMIN',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$SzqqhbsxjG2/vIh6Of9TduHHpJ653U8jTn2p5Ji06lWTfGiCJQzBW',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'is_admin' => true,
            'dept_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
