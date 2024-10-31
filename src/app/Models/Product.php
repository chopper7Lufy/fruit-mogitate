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
      'name','price','image','season','description'
    ];

    public function getName()
    {
      return  $this->name;
    }
    public function getPrice()
    {
      return $this->price;
    }
    public function getImage()
    {
      return $this->image;
    }

    public function getSeason()
    {
      return $this->season;
    }

    public function getDescription()
    {
      return $this->description;
    }
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
