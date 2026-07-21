<?php

namespace Core;

class BaseController
{
    // ลบ $Database และ $Model ออกได้เลยครับ
    public function __construct()
    {
        // สามารถปล่อยว่างไว้ หรือใส่ Logic อื่นๆ ที่ทุก Controller ต้องใช้ร่วมกัน
    }
}