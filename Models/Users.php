<?php

namespace Models;

use Core\Model;

class Users extends Model
{
    public static function getUsers()
    {
        $Query = "SELECT * FROM users WHERE `is_active` = 1";
        return static::getInstance()->SelectRow($Query);
    }

    public static function getUserById($id)
    {
        $Query = "SELECT * FROM users WHERE `id` = :id AND `is_active` = 1";
        return static::getInstance()->SelectRow($Query, ['id' => $id], true);
    }
}
