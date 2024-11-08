<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'images' => "json",
        'atr_Colors' => "json",
        'atr_Wide' => "json",
        'atr_Size' => "json",
        'atr_package' => "json",
        'atr_Dimension' => "json",
        'atr_Height' => "json",
        'atr_Weight' => "json",
        'atr_Pieces' => "json",
        'atr_Names' => "json",
        'atr_Material' => "json",

    ];
}
