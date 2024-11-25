<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    private $student;

    public function __construct() {
        $this->student = new Student();
    }

    public function index() {
        $students = $this->student->getAll();
        require_once __DIR__ . '/../views/student/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $studentData = [
                'nim' => $_POST['nim'],
                'name' => $_POST['name'],
                'major' => $_POST['major']
            ];

            if ($this->student->create($studentData)) {
                header("Location: index.php");
                exit();
            }
        }
        require_once __DIR__ . '/../views/student/create.php';
    }

    public function edit($id) {
        $student = $this->student->getById($id);
        
        if (!$student) {
            header("Location: index.php");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $studentData = [
                'nim' => $_POST['nim'],
                'name' => $_POST['name'],
                'major' => $_POST['major']
            ];

            if ($this->student->update($id, $studentData)) {
                header("Location: index.php");
                exit();
            }
        }
        
        require_once __DIR__ . '/../views/student/edit.php';
    }

    public function delete($id) {
        if ($this->student->delete($id)) {
            header("Location: index.php");
            exit();
        }
    }
}