<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    public function getUserByUsernameAndPassword($username, $password){
        return $this->where("username", $username)->where("password", $password)->first();
    }
}
