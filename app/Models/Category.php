<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['slug', 'name', 'id', 'parent_id'];

    public function parentId()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id')->with('parentId');
    }

    public function children()
    {
       return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
