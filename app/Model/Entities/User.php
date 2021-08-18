<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\UserAuthenticate;

/**
 * Class User
 * @package App\Model\Entities
 */
class User extends UserAuthenticate
{
    protected $table = 'users';

    protected $fillable = [];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
