<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Season extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'product_id',
        'season_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function season()
    {
        return $this->belongsTo('App\Models\Season');
    }
}
