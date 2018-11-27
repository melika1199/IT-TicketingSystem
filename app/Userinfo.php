<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    // the fields for the ticketinfor table in the database are present here
    protected $table = 'userinfo';
    protected $fillable = [
        'email', 'firstName', 'lastName',
    ];

    // cardinality to ticketinfor
    public function ticketinfo() {
        return $this->hasMany('App\Ticketinfor');
    }

}
