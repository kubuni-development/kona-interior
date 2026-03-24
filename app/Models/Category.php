<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id', 'sort_order'];

    // Relatie: Een subcategorie hoort bij één hoofdcategorie
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Relatie: Een hoofdcategorie kan veel subcategorieën hebben
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Automatisch een slug maken op basis van de naam
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
}