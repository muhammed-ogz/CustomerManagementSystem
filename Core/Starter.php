<?php

namespace Core;

use Bramus\Router\Router;

class Starter
{

    public $router;
    public $db;
    public $request;
    public $view;

    public function __construct()
    {
        $this->router = new Router();
        $this->db = new Database();
        $this->request = new Request();
        $this->view = new View();
    }
}
