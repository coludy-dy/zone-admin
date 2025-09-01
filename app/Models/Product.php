<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $connection='mysql';
    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'img_name',
        'description',
        'img_path',
        'brand_id',
        'color',
        'price',
        'ram',
        'storage',
        'camera',
        'battery',
        'screen_size',
        'stock',
        'status'
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }


    public function orderItem()
    {
        return $this->hasMany(OrderItem::class, 'product_id', 'id');
    }
}
