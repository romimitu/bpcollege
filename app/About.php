<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable=['collageName','location','area','course','teacher','staff','student','history','mission','facebook',
    'google','twitter','email','mobile','map'];
}
