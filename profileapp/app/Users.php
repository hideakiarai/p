<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'tel' => 'required',
        'email' => 'required',
        'password' => 'required',
    );
}
