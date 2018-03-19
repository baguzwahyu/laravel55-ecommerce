<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'shippers_id', 
        'payments_id', 
        'members_id',
        'OrderNumber',
        'OrderDate',
        'ShipDate',
        'RequiredDate',
        'Freight',
        'SalesTax',
        'TransactStatus',
        'ErrLoc',
        'ErrMsg',
        'Fulfilled',
        'Delete',
        'Paid',
        'PaymentDate',
    ];

    public function shippers()
    {
        return $this->belongsTo('App\shippers','shippers_id');
    }

    public function payments()
    {
        return $this->belongsTo('App\payment','payments_id');
    }

    public function members()
    {
        return $this->belongsTo('App\members','members_id');
    }
}
