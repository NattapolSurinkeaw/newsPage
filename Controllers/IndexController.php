<?php

namespace Controllers;

use Models\Users;
use Models\Category;

class IndexController extends \Core\BaseController
{
    public function index()
    {
        $Users = Users::getUsers();
        $UserById = Users::getUserById(1);
        
        view('index/index' , compact('Users'));
    }

    public function catePage($slug)
    {   
        // เรียกใช้ได้ทันทีโดยไม่ต้อง new Category() เอง
        $category = Category::getCategoryById(1);
        
        // ส่งตัวแปร $category ไปแสดงผลที่ View
        view('index/category', compact('category'));
    }

}