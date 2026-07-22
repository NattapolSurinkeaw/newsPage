<?php

namespace Models;

use Core\Model;

class Category extends Model
{
    public static function getCategory()
    {
        $Query = "SELECT * FROM categories WHERE `status_display` = 1";
        return static::getInstance()->SelectRow($Query);
    }

    public static function getCategoryById(int $id)
    {
        $Query = "SELECT * FROM categories WHERE `id` = :id AND `status_display` = 1";
        return static::getInstance()->SelectRow($Query, ['id' => $id], true);
    }
}