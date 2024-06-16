<?php 

namespace App\Controllers;
use Core\BaseController;
use Core\Session;

class Auth extends BaseController
{
    public function Index(){
        echo "Login Sayfası";
    }
    public function Login(){
        echo 'Login Post';
    }
    public function Logout(){
        Session::removeSession();
        redirect('login');
    }
}