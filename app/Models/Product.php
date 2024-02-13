<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Wishlist;

class Product extends Model
{
    use HasFactory;

    use SearchableTrait;

    protected $searchable = [
        // column with priorities
        'columns' => [
            'products.name' => 6,
            'products.code' => 4,
        ],
        'joins' => [
            'category_product' => ['products.id','category_product.product_id'],
        ],
    ];

    public function related() {
        return $this->belongsToMany(Product::class, 'related_products', 'product_id', 'related_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function features() {
        return $this->hasMany(Feature::class);
    }

    public function toSearchableArray() {
        $array = $this->toArray();
        $extraFields = [
            'category' => $this->category->name
        ];
        return array_merge($array, $extraFields);
    }

    public function wishlist() {
        return $this->hasMany(Wishlist::class, 'wishlist', 'user_id', 'product_id');
    }
}
