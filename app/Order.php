<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    
    protected $fillable = ['orderNo', 'amount', 'currencyCode', 'customerEmail', 'customerName', 
                           'customerPhone',     'customerCountry', 'lang', 'status'];
}
 