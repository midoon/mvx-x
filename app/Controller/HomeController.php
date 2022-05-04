<?php

namespace Harun\MvcDasar\Controller;

use Harun\MvcDasar\App\View;

class HomeController{
    public function index(){
        $model = [
            "title" => "mvc dasar",
            "content" => "selamat belajar mvc dasar"
        ];
        View::render("Home/index", $model);
    }

    public function hello(){
        echo "HomeController hello";
    }

    public function world(){
        echo "HomeController world";
    }

    public function login (): void{
        $request = [
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        ];

        $user = [];

        $response = [
            "message" => "Login succes"
        ];

        //kirim response ke view
    }
}