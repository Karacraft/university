<?php

namespace App\Models;

use App\Traits\HasPermissionsTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasPermissionsTrait;

    /**
     * Moving Models to their own Folder , Change Name Space and do as mentioned in below stack
     *  https://stackoverflow.com/a/44080541/4853427
     *  in end composer dump-autoload
     *  php artisan config:clear
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'designation',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
        /*************************-Methods-*****************/
        public function isOwner(){return $this->owner == Constants::ROLE_OWNER ? true:false;}
        public function isUser(){return $this->owner == Constants::ROLE_USER ? true:false;}
}
