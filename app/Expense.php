<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable=['item_name','purchase_from','purchase_date','amount_price','file'];
}
