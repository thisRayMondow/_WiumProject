<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class departement extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'departements';

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'kode_wilayah',
        'alamat'
    ];
}
