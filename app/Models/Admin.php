<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ["username","password","firstname","middlename","lastname","admin_id","department"];
}
