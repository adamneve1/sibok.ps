<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\getSlugOptions;
use Spatie\Sluggable\HasSlug;

class Category extends Model
{
    use HasSlug;
    use HasFactory;


    protected $fillable = ['name', 'slug'];


    public function products()
    {


        return $this->hasMany(Product::class);
        
    }

    public function getSlugOptions():SlugOptions{
        return SlugOptions::create()
        ->generateSlugFrom('name')
        ->saveSlugTo('slug');
    }
}
