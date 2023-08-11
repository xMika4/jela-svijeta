<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title'];
    protected $table = 'categories';

}
