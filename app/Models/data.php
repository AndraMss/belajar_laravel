<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;

    protected $table = 'data';
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'hobi', 'umur'
    ];
}