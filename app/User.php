<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
/*use Zizaco\Entrust\Traits\EntrustUserTrait;*/

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
   /* use EntrustUserTrait;*/
    
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'isAdmin'];
    protected $hidden = [
        'password', 'remember_token',
    ]; 
   

public function isAdmin()
{
    return $this->isAdmin; // this looks for an admin column in your users table

}
	

    
}

