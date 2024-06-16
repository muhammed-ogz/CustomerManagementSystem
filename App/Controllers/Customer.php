<?php

namespace App\Controllers;
use Core\BaseController;

class Customer extends BaseController
{
    public function Index()
    {
        $user = [
            'isim' => 'Muhammed',
            'soyisim' => 'Oğuz'
        ];

        $data['navbar'] = $this->view->load('static/navbar');
        $data['sidebar'] = $this->view->load('static/sidebar');
        echo $this->view->load('home/index',compact('data'));
    }
    public function Add()
    {
        $user = [
            'isim' => 'Muhammed',
            'soyisim' => 'Oğuz'
        ];

        $data['navbar'] = $this->view->load('static/navbar');
        $data['sidebar'] = $this->view->load('static/sidebar');
        echo $this->view->load('home/index',compact('data'));
    }
    public function Edit()
    {
        $user = [
            'isim' => 'Muhammed',
            'soyisim' => 'Oğuz'
        ];

        $data['navbar'] = $this->view->load('static/navbar');
        $data['sidebar'] = $this->view->load('static/sidebar');
        echo $this->view->load('home/index',compact('data'));
    }
}
