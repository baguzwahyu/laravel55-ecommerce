<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetails extends Model
{
    protected $table = 'orders';
    protected $fillable = ['id', 'CategoryName', 'Description'];
}
