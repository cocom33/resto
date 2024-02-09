<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'category_id',
        'stock',
        'status',
        'is_favorite',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}