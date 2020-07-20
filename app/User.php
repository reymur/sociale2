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
        return $this->HasUserFirstAndLastName() ?
            $this->getUserFirstAndLastNames() :
            $this->getUserLogin();
    }

    public function HasUserFirstAndLastName(): bool
    {
        return $this->first_name && $this->last_name;
    }

    public function getUserFirstAndLastNames(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getUserFirstNameOrLogin()
    {
        return $this->first_name ?? $this->login;
    }

    public function getUserLogin()
    {
        return $this->login ?? 'User';
    }

    public function getUserFirstName()
    {
        return Auth::user()->first_name ?? false;
    }

    public function getUserAvatar()
    {
        $email = strtolower(trim($this->email));

        return 'https://gravatar.com/avatar/' . md5($email) . '?d=mp' . '&s=170';
    }

    public function myFriends()
    {
        return $this->belongsToMany(User::class, 'friend_user', 'user_id', 'friend_id');
    }

    public function iAmFriend()
    {
        return $this->belongsToMany(User::class, 'friend_user', 'friend_id', 'user_id');
    }

    public function getFriends()
    {
        return $this->myFriends()->where('accepted', true)->get()
            ->merge($this->iAmFriend()->where('accepted', true)->get());
    }

    public function getRequests()
    {
        return $this->iAmFriend()->wherePivot('accepted',false)->get();
    }
}
