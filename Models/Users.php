<?php

namespace Models;

use Core\Model;

class Users extends Model
{
    public function getUsers()
    {
        $Query = "SELECT * FROM users WHERE `is_active` = 1";
        return $this->SelectRow($Query);
    }

    public function getUserById($id)
    {
        $Query = "SELECT * FROM users WHERE `id` = :id AND `is_active` = 1";
        return $this->SelectRow($Query, ['id' => $id], true);
    }
}
