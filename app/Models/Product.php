<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * fillable fields
     *
     * @var array
     */
    protected $fillable = [
         'name', 'slug', 'description', 'category_id'    
    ];

    
    /**
     * Relationship to Category table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
