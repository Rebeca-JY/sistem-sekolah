<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';

use App\core\Controller;

class StudentController extends Controller

{ 
    Public function index()
    {
            $this->view('students.index');
    }
    public function create ()
    {
            $this->view('students.create');
    }

    public function show (string $id)
    {
            $this->view('students.show');
    }

    public function edit (string $id)
    {
            $this->view('students.edit');
    }
}




?>