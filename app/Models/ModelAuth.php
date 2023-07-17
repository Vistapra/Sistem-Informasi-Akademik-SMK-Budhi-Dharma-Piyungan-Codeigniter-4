<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'user';

    public function LoginUser($username, $password)
    {
        return $this->where('username', $username)
            ->where('password', $password)
            ->first();
    }
}