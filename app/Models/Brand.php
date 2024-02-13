<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Brand extends Model
{
    use HasFactory;

    public function parentId()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id')->with('parentId');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id')->with('children');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
