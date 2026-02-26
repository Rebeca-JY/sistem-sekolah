<?php
namespace App\Controllers;

class StudentController

{ 
    Public function index()
    {
        require_once './app/views/students/index.php';
    }
    public function create ()
    {
        require_once './app/views/students/create.php';
    }

}



?>