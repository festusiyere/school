<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicPost extends Model
{
    protected $fillable = ['name', 'title', 'description', 'igHandle' ];
}
