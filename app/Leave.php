<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable=['status'];
       public function user()
    {
        return $this->belongsTo(User::class);
    }
}
