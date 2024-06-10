<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    protected $fillable=['name','title'];
 
    protected $table='privacy';
    use HasFactory;
}
