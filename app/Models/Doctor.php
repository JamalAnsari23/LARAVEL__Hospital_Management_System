<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

   // if there is no crated_at and updated_at in Doctor tables then we run next code for Post method API 
    // public $timestamps=false;
}
