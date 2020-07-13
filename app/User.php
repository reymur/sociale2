<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'email', 'password', 'first_name', 'last_name', 'location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserFullName()
    {
        return $this->isHasUserFirstAndLastName() ?
               $this->getUserFirstAndLastNames() :
               $this->getUserLogin();
    }

    public function isHasUserFirstAndLastName(): bool
    {
        return Auth::user()->first_name && Auth::user()->last_name;
    }

    public function getUserFirstAndLastNames(): string
    {
        return Auth::user()->first_name .' '. Auth::user()->last_name;
    }

    public function getUserLogin()
    {
        return Auth::user()->login ?? 'User';
    }

    public function getUserFirstName()
    {
        return Auth::user()->first_name ?? false;
    }
}
