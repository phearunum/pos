<?php

class  Menu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        header('Content-Type: application/json');
        $data =file_get_contents('http://inyourheart.beta.com/Api/Api/getMenu');
        $menu = json_decode($data, true);
        foreach ($menu as $menu){
            echo $menu['body'][0]->menu;
        }


    }

}