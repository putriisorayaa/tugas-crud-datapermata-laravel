<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatuPermata extends Model
{
    use HasFactory;

    protected $table = 'batu_permata';

    protected $fillable = [
        'nama',
        'jenis',
        'berat',
        'harga'
    ];
}