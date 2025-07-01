<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'email', 'created_at'];
}
