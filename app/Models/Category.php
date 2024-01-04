<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;    

    /**
     * fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'name',  'description', 'parent_id'
    ];

    
    /**
     * Relationship to the parent category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {

        return $this->belongsTo(Category::class, 'parent_id');

    }

/**
 * Relationship to the children Category
 *
 * @return @return \Illuminate\Database\Eloquent\Relations\hasMany
 */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

/**
 * Relationship to the products table
 *
 * @return @return \Illuminate\Database\Eloquent\Relations\hasMany
 */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
