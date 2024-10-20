<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
      'content'
    ];

    public function product_season()
    {
        return $this->hasMany(Product_Season::class);
    }
    public function reviews()
    {
      return $this->belongsToMany(Prouduct_Season::class);
    }


    public function scopeCategorySearch($query, $product_id)
    {
      if (!empty($product_id)) {
        $query->where('product_id', $product_id);
      }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
      if (!empty($keyword)) {
        $query->where('content', 'like', '%' . $keyword . '%');
      }
    }

}
