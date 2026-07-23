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

    public static function createUser(array $data)
    {
        $Query = "INSERT INTO users (`name`, `email`, `password`, `is_active`)
                  VALUES (:name, :email, :password, :is_active)";
        return static::getInstance()->InsertRow($Query, $data, true);
    }

    public static function updateUser(int $id, array $data)
    {
        $Sets = [];
        foreach ($data as $Key => $_) {
            if ($Key === 'id') {
                continue;
            }
            $Sets[] = "`{$Key}` = :{$Key}";
        }
        $Query = "UPDATE users SET " . implode(', ', $Sets) . " WHERE `id` = :id";
        return static::getInstance()->UpdateRow($Query, $data);
    }

    public static function deleteUser(int $id)
    {
        $Query = "DELETE FROM users WHERE `id` = :id";
        return static::getInstance()->DeleteRow($Query, ['id' => $id]);
    }
}
