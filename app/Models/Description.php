<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use Translatable;
    public $translatedAttributes = ['description'];
    protected $table = 'descriptions';

}
