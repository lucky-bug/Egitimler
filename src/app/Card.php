<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
    	'front_title',
    	'front_subtitle',
    	'back_title',
    	'back_subtitle',
    ];
}
