<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apimodel extends Model
{
   protected $table ="apimodels";
   protected $fillable =['name','email'];
}
