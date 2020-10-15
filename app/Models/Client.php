<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'Client';

    public function users(){
        return this->belongsTo('App\User', 'user_id');
    }

    public function sales(){
        return this->hasmany('App\Sale');
    }





    use HasFactory;
}
