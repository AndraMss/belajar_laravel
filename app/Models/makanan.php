<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    use HasFactory;

    protected $table = 'makanans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'asal', 'kategori', 'harga'
    ];
}
