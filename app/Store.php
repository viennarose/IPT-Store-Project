<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'location', 'owner', 'net_worth'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}

