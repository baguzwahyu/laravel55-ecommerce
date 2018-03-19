<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shippers extends Model
{
    protected $table = 'shippers';
    protected $fillable = ['id', 'CompanyName', 'Phone'];

    public function orders()
    {
        return $this->hasMany('App\orders','shippers_id','id');
    }
}
