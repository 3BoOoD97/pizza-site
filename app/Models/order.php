<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Pizza;

class order extends Model
{
    use HasFactory;


//User with id 1 can make first order
//User with id can make many orders
public function user(){

    return $this->belongsTo(User::class); 
}

public function pizza(){

    return $this->belongsTo(Pizza::class); 
}

}