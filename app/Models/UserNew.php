<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNew extends Model
{
    use HasFactory;
    public $table = 'users';
    public $timestamps = false;

    // protected $fillable = [
    //     'name
    //     ',
    //     'email',
    //     'password',
    //     'phone
    //     ',
    //     'address',
    //     'role
    //     ',
    //     ];
    public function getNameAttribute($value)
    {
        // return lcfirst($vadvvsdvSalue);
        return lcfirst($value);
    }


}
