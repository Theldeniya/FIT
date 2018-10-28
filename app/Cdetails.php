<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cdetails extends Model
{
    protected $fillable=[
        'first_name','last_name','email','password','phone_number',
    ];
}
