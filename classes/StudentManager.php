<?php

require 'Student.php';

// class StudentManager
class StudentManager {
    private $students = [];

    public function add_student(string $name, int $grade) {
        if ($grade > 100 || $grade < 0) {
            $grade = -1;
        }
        $this->students[$name] = new Student($name, $grade);
    }

    public function update_grade(string $name, int $grade) {
        if (isset($this->students[$name])) {
            $this->students[$name]->setGrade($grade);
        } else {
            echo "\n**** Student not found ****\n";
        }
    }
    public function remove_student ($name) {
;
        if (isset($this->students[$name])){
            unset($this->students[$name]);
        } else {
            echo "\n**** Student not found ****\n";
        }
    }

    public function display_student() {
        echo "\n";
        if (empty($this->students)) {
            echo "No student found";
        } else {
        echo "=================================\n";
        foreach ($this->students as $student) {
            echo "Student: ",$student->getName()," Graded: ",$student->getGrade(), "\n";
        }
        echo "=================================\n";
        }
    }
}