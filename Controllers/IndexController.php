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
        $categories = [
            'politics'      => ['name' => 'การเมือง',     'icon' => 'icon-politics',      'tag' => 'politics',      'desc' => 'ข่าวการเมือง รัฐสภา...'],
            'economy'       => ['name' => 'เศรษฐกิจ',     'icon' => 'icon-economy',       'tag' => 'economy',       'desc' => 'ข่าวเศรษฐกิจ ตลาดทุน...'],
            'sports'        => ['name' => 'กีฬา',         'icon' => 'icon-sports',        'tag' => 'sports',        'desc' => 'ข่าวกีฬา...'],
            'entertainment' => ['name' => 'บันเทิง',     'icon' => 'icon-entertainment', 'tag' => 'entertainment', 'desc' => 'ข่าวบันเทิง...'],
            'technology'    => ['name' => 'เทคโนโลยี',   'icon' => 'icon-tech',          'tag' => 'tech',          'desc' => 'ข่าวเทคโนโลยี...'],
            'world'         => ['name' => 'ต่างประเทศ',  'icon' => 'icon-world',         'tag' => 'world',         'desc' => 'ข่าวต่างประเทศ...'],
            'lifestyle'     => ['name' => 'ไลฟ์สไตล์',   'icon' => 'icon-lifestyle',     'tag' => 'lifestyle',     'desc' => 'ข่าวไลฟ์สไตล์...'],
        ];

        // เช็กว่ามี slug นี้ในอาร์เรย์ไหม ถ้าไม่มีให้ดึงอันแรก หรือ 404
        $cat = $categories[$slug] ?? $categories['politics'];
        $category = $cat;

        view('index/category', compact('slug', 'category', 'categories', 'cat'));
    }

    public function articlePage($slug)
    {
        // ตัวอย่างการดึงข้อมูลบทความจากฐานข้อมูล
        $article = [
            'title' => 'ตัวอย่างบทความ',
            'content' => 'นี่คือตัวอย่างเนื้อหาของบทความที่เกี่ยวข้องกับ slug: ' . $slug,
            'author' => 'ผู้เขียนตัวอย่าง',
            'published_at' => date('Y-m-d H:i:s'),
        ];

        // ส่งตัวแปร $article ไปแสดงผลที่ View
        view('index/article', compact('article'));
    }

}