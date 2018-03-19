<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $fillable = [
    'id', 
    // 'SKU', 
    // 'IDSKU',
    // 'VendorProductID',
    'ProductName',
    'ProductDescription',
    'suppliers_id',
    'categories_id',
    'QuantityPerUnit',
    'UnitPrice',
    // 'MSRP',
    'AvailableZise',
    'AvailableColors',
    'Size',
    'Color',
    'Discount',
    'UnitWeight',
    'UnitsInStock',
    'UnitsOnOrder',
    'ReorderLevel',
    'ProductAvailable',
    'DiscountAvailable',
    'CurrentOrder',
    'Picture',
    'Ranking',
    'Note',
    ];

    public function suppliers()
    {
        return $this->belongsTo('App\suppliers','suppliers_id');
    }

    public function categorys()
    {
        return $this->belongsTo('App\category','category_id');
    }
}
