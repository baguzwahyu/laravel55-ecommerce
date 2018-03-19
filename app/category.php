<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id', 'CategoryName', 'Description'];

    public function products()
    {
        return $this->hasMany('App\products','categories_id','id');
    }
}
