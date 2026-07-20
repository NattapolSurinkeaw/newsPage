<?php

namespace Controllers;

class Index extends \Core\BaseController
{
    protected string $Model = "Users";
    public function index()
    {
        $Users = $this->Database->getUsers();
        $UserById = $this->Database->getUserById(1);
        
        view('index/index' , compact('Users'));
    }

}