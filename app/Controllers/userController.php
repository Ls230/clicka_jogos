<?php
namespace App\Controllers;

use Core\Controller;

class userController extends Controller {
    
    public function login() {
        $this->view('login');
    }
    public function cadastro() {
        $this->view('cadastro');
    }
}