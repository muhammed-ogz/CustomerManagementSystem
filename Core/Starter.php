<?php
namespace Core;
use Bramus\Router\Router;

Class Starter{

    public $router;
    public $db;
    public $request;
    public function __construct() {
        $this->router = new Router();
        $this->db = new Database();
        $this->request = new Request(); 
    }
}