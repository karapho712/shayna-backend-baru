<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Propaganistas\LaravelFakeId\RoutesWithFakeIds;


class Product extends Model
{
    use SoftDeletes ;
    use RoutesWithFakeIds;

    protected $fillable = [
        'name', 'type', 'description', 'price', 'slug', 'quantity'
    ];

    protected $hidden = [
        
    ];

    public function galleries()
    {
        return  $this->hasMany(ProductGallery::class,'product_id');
    }
}
