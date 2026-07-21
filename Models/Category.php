<?php

namespace Models;

use Core\Model;

class Category extends Model
{
    public function getCategory()
    {
        $Query = "SELECT * FROM categories WHERE `status_display` = 1";
        return $this->SelectRow($Query);
    }

    public function getCategoryById(int $id)
    {
        $Query = "SELECT * FROM categories WHERE `id` = :id AND `status_display` = 1";
        return $this->SelectRow($Query, ['id' => $id], true);
    }
}