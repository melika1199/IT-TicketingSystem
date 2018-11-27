<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticketinfor extends Model
{
    // the fields for the ticketinfor table in the database are present here
    public $table = 'ticketinfo';
    public $fillable = [
        'OS', 'softwareIssue', 'additionalComments','status','Reply','priority', 'escLevel'
    ];

    // cardinality  to userinfo
    public function userinfo() {
        return $this->belongsTo('App\Userinfo');
    }

}
