<?php

// class Student for students

class Student {
    private string $name;
    private int $grade;
    
    public function __construct(string $name, int $grade) {
        $this->name = $name;
        $this->grade = $grade;
    }

    // Getter
    public function getName() {
        return $this->name;
    }

    // Getter

    public function getGrade() {
        return $this->grade;
    }

    // Setter
    public function setGrade( $grade ) {
        $this->grade = $grade;
    }
}