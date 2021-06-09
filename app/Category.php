<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //category_filler
    protected $fillable = [
        'name', 'description'
    ];
}
