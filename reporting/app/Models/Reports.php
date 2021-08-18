<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'crime_type',
        'victim_name',
        'discription',
        'victim_adresse',
        'victim_image',
        'crime_date',
        'reports_status',
        'user_id',
    ];


}
