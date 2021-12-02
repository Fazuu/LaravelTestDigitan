<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'userdetails';
    
    protected $fillable = [
        'address', 'phone'
    ];

    function getUser()
    {
        return $this->hasMany(User::class, 'memberid');
    }
}
