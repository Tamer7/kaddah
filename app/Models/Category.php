<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['slug', 'name', 'id', 'parent_id'];

    public static function getParentList(Category $category)
    {
        if ($category->parent)
            return self::getParentList($category->parent)->push($category);

        return collect([$category]);
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id')->with('parentId');
    }

    public function children()
    {
       return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
