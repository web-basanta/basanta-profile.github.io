<?php
// all class and function in hare

class Main{
    public $title = null;
    public $name = "name";

    function __construct()
    {
        $this->userManage();
    }

    public function userManage(){
        $siteTitle = $this->title = "Welcome to new operation";
        return $siteTitle;
    }

    public function getData(){
        
    }
}



?>