<?php

namespace App\Controllers;

use Core\BaseController;

class User extends BaseController
{
    public function showProfile($id)
    {
        $users = $this->db->query("SELECT * FROM users WHERE users.id = '$id'", true);
        print_r($users);
    }

    public function test()
    {
        $this->view->load('test', ['isim' => 'Oguz']);
    }

    public function getTest()
    {
        $get = $this->request->post();
        print_r($get);
    }
}