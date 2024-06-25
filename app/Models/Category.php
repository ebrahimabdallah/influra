<?php

namespace App\Models;

use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','image'];
    protected $table='categories';

    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
