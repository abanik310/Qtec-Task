<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;



class User extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;
    

    protected $connection = 'qtec_task';
    protected $table = 'tbl_users';

    // public function validateCredentials($user, array $credentials)
    // {
    //     return password_verify($credentials['password'], $user->getAuthPassword());
    // }
    public function validateCredentials($user, array $credentials)
    {
        return Hash::check($credentials['password'], $user->getAuthPassword());
    }
}
