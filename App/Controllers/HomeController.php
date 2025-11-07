<?php
namespace App\Controllers;
use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'Tugas MVC Framework',
            'message' => 'Selamat datang di website tugas Florecita Wenny'
        ];
        
        $this->view('home.index', $data);
    }
}