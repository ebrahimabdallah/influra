<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BussinessOwenr extends Model implements Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'category_id'
    ];

    protected $table = 'business_owner';

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    use HasApiTokens , HasFactory, Notifiable;
    
    // Other model properties and methods...

    public function getAuthIdentifierName()
    {
        return 'id'; // Assuming 'id' is the name of the primary key column
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
