<?php

use Teacher\TeacherName;
use employee\Employee;



include_once 'StudentName.php';
include_once 'TeacherName.php';
include_once 'employee/Employee.php';


//here call the student Class without using namespace
$Student = new StudentName();
echo $Student->name() . "<br>";


//here call the teacher class using namespace
$teacher = new TeacherName();
echo $teacher->name() . "<br>";


//here call the employee folder class using namespace
$employee = new Employee();
echo $employee->name();