<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable=[
        'name','adress','salary','contact','position','image','user_id','status','joiningdate','exitedate','department'
    ];
}
