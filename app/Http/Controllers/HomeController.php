<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return "Controller.php" ;
    }
    public function about(){
        return "About" ;
    }
    public function service(){
        return "Service" ;
    }
    public function contact(){
        return "Controller.php" ;
    }
    public function login(){
        return "Controller.php" ;
    }

}
