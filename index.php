<?php

//code to excute the main function (entry point) we can call it (index or main)
// (./ go to this folder) in this folder. just write the needed file 
// (../ go to this folder or file) go up one folder

require 'class/StudentManager.php';

// $student_manager = new StudentManager();
// $student_manager->add_student("Usama", grade: 101) ;
// $student_manager->add_student("Mike", grade: 90) ;
// $student_manager->add_student("Nick", grade: 50) ;
// $student_manager->add_student("Bad", grade: -3) ;
// $student_manager->display_student() ;
// // $student_manager->remove_student("any") ;
// $student_manager->update_grade("Usama", 10) ;
// $student_manager->display_student() ;
// all the previuos to test how all my classes and functions work
// this is a good practice

$student_manager = new StudentManager();

echo "Welcome To Student Manager!\n";
while (true) {
    echo "1. Add Student\n";
    echo "2. Remove Student\n";
    echo "3. Update Student Grade\n";
    echo "4. Display Students\n";
    echo "5. To exit the program";
    echo "Choose an option\n";

    $choice = fgets(STDIN);

    switch ($choice) {
        case 1:
            echo "Enter student name to add: ";
            $name = fgets(STDIN);
            echo "Enter student grade to add: ";
            $grade = fgets(STDIN);
            $student_manager->add_student($name, $grade);
            break;
        case 2:
            echo "Enter student name to delete: ";
            $name = fgets(STDIN);
            $student_manager->remove_student($name) ;
            break;
        case 3:
            echo "Enter student name to update: ";
            $name = fgets(STDIN);
            echo "Enter student grade to update: ";
            $grade = fgets(STDIN);
            $student_manager->update_grade($name, $grade);
            break;
        case 4:
            $student_manager->display_student() ;
            break;
        case 5:
            echo "Exiting.....";
            exit; // to exit the while loop also I can use (return)
        default:
            echo "Invalid entry, please try again\n";

    }
}