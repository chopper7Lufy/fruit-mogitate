<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    protected $table = 'seasons';
    protected $fillable = [
        'name'
    ];

    public function product_season()
    {
        return $this->hasMany('App\Models\Product_Season');
    }
    public function reviews()
    {
      return $this->belongsToMany(Prouduct_Season::class);
    }
}
