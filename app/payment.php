<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['id', 'PaymentType', 'Allowed'];

    public function orders()
    {
        return $this->hasMany('App\orders','payments_id','id');
    }
}
