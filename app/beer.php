<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['brand', 'name', 'type', 'taste', 'color', 'alcohol', 'image'];
}
