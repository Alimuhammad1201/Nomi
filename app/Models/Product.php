<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'name',
        'slug',
        'category_id',
        'reguler_price',
        'sale_price',
        'stock_quantity',
        'status',
        'description',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subImages()
    { 
       return $this->hasMany(ProductSubImages::class);
    }

    public function countries()
    {
      return $this->belongsToMany(Country::class, 'product_countries');
    }
     
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            $product->code = 'P-' . str_pad(Product::max('id') + 1, 5, '0', STR_PAD_LEFT);
        });
    }
}
