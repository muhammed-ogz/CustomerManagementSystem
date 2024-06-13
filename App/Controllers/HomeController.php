<?php

namespace App\Controllers;
use Core\BaseController;

class Home extends BaseController
{
    public function Index()
    {
        $this->view->load('home/index');
    }
}
