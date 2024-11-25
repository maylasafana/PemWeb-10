<?php
class Student {
    private $dataFile;
    private $students;

    public function __construct() {
        $this->dataFile = __DIR__ . '/../data/students.json';
        $this->loadData();
    }

    private function loadData() {
        if (file_exists($this->dataFile)) {
            $jsonData = file_get_contents($this->dataFile);
            $data = json_decode($jsonData, true);
            $this->students = $data['students'];
        } else {
            $this->students = [];
            $this->saveData();
        }
    }

    private function saveData() {
        $data = ['students' => $this->students];
        file_put_contents($this->dataFile, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function getAll() {
        return $this->students;
    }

    public function create($data) {
        $newStudent = [
            'id' => time(), // Menggunakan timestamp sebagai ID
            'nim' => $data['nim'],
            'name' => $data['name'],
            'major' => $data['major']
        ];
        
        $this->students[] = $newStudent;
        $this->saveData();
        return true;
    }

    public function getById($id) {
        foreach ($this->students as $student) {
            if ($student['id'] == $id) {
                return $student;
            }
        }
        return null;
    }

    public function update($id, $data) {
        foreach ($this->students as $key => $student) {
            if ($student['id'] == $id) {
                $this->students[$key] = array_merge($student, $data);
                $this->saveData();
                return true;
            }
        }
        return false;
    }

    public function delete($id) {
        foreach ($this->students as $key => $student) {
            if ($student['id'] == $id) {
                unset($this->students[$key]);
                $this->students = array_values($this->students); // Reset array keys
                $this->saveData();
                return true;
            }
        }
        return false;
    }
}