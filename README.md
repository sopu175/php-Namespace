# php-Namespace

### Suppose there are three types users
<ul>
<li> Student </li>
<li> Teacher </li>
<li> Employee </li>
</ul>

####I am using name space for Teacher and Employee Class not form Student Class. Lets see our three Classes
###Student Class from StudentName.php file

```sh
<?php
//Using this without namespace in php
class StudentName
{
    public function name()
    {
        echo "Student";
    }
}
```

###Teacher Class from TeacherName.php file

```sh
<?php
//using namespace
namespace Teacher;

class TeacherName
{
    public function name()
    {
        echo "Teacher";
    }
}
```

###Employ Class from Employee folders Emplyee.php file


```sh
<?php
//Using namespace
namespace employee;


class Employee{
    public function name(){
        echo "Employee name";
    }
}
```

###Here is the index file where we assign the name space

```sh
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
```