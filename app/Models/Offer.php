<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //if nom table database different au nom modele
   // protected $table="offers";

    protected $fillable=['name','price','details'];
    protected $hidden=['created_at','updated_at'];
}
