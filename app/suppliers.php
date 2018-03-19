<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    protected $table = 'suppliers';
    protected $fillable = 
    [
     'id',
     'CompanyName', 
    //  'ContactFName', 
    //  'ContactLName', 
     'ContactTitle',
     'Address',
     'City',
     'State',
     'PostalCode',
     'Country',
     'Phone',
     'Fax',
     'Email',
     'URL',
     'PaymentMethods',
     'DiscountType',
     'TypeGoods',
     'Notes',
     'DiscountAvailable',
     'CurrentOrder',
     'Description',
     'SizeURL',
    ];

    public function products()
    {
        return $this->hasMany('App\products','suppliers_id','id');
    }
}
