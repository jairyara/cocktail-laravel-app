<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'alcoholic',
        'glass',
        'instructions',
        'image',
        'ingredient1',
        'ingredient2',
        'ingredient3',
        'ingredient4',
        'ingredient5',
        'ingredient6',
        'ingredient7',
        'ingredient8',
        'ingredient9',
        'ingredient10',
        'ingredient11',
        'ingredient12',
        'ingredient13',
        'ingredient14',
        'ingredient15',
        'measure1',
        'measure2',
        'measure3',
        'measure4',
        'measure5',
        'measure6',
        'measure7',
        'measure8',
        'measure9',
        'measure10',
        'measure11',
        'measure12',
        'measure13',
        'measure14',
        'measure15',
    ];
}
