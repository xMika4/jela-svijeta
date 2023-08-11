<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title']; 
    protected $fillable = ['title', 'category_id'];
    protected $table = 'meals';
    protected $dates = ['deleted_at'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function description()
    {
        return $this->hasOne(Description::class, 'id');
    }
    public function translations()
    {
        return $this->hasMany(MealTranslation::class);
    }
}
