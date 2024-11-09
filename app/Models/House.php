<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table ="houses";
    
    protected $fillable = [
        'name',
        'description',
        'location',
        'land_area',
        'building_area',
        'floor_count',
        'bedroom_count',
        'bathroom_count',
        'price',
        'unit_count',
        'status',
        'image',
    ];
}
