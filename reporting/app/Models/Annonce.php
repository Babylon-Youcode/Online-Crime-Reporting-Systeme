<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'image',
        'title',
        'discription',
        'date'
    ];


}
