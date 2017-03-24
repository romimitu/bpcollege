<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['name','idno', 'position', 'description', 'contact_details', 'image', 'email', 'facebook'];
}
