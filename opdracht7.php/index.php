<?php

require_once "vendor/autoload.php";

use Schooltrip\Person;
use Schooltrip\Teacher;
use Schooltrip\Student;
use Schooltrip\Group;
use Schooltrip\Schooltrip;

$group = new Group("SOD2A");
$group2 = new Group("SOD2B");

$student1 = new Student("Piet", $group);
$student2 = new Student("Jan", $group, true, true);
$student3 = new Student("Kees", $group2, true, true);
$student4 = new Student("Klaas", $group2, true, true);
$student5 = new Student("Mohammed", $group2, true);
$student6 = new Student("Eefje", $group2, true, true);
$student7 = new Student("Martijn", $group2);
$student8 = new Student("Kees", $group2, true, true);

$teacher1 = new Teacher("Wigmans", 10000);
$teacher2 = new Teacher("Brugge", 9500);
$teacher3 = new Teacher("van Helden", 9000);
$teacher4 = new Teacher("vd Lugt", 15000);

$schooltrip = new Schooltrip("Efteling");

$schooltrip->addStudent($student1);
$schooltrip->addStudent($student2);
$schooltrip->addStudent($student3);
$schooltrip->addStudent($student4);
$schooltrip->addStudent($student5);
$schooltrip->addStudent($student6);
$schooltrip->addStudent($student7);
$schooltrip->addStudent($student8);

$schooltrip->getSchooltripList();

print "<pre>";

print "<table border='1'>
    <thead>
        <tr>
            <th>Docent</th>
            <th>Student</th>
            <th>Klas</th>
            <th>Betaald</th>
        </tr>
    </thead>";
foreach($schooltrip->getSchooltripList() as $schooltripList){
    $students = $schooltripList->getStudentList();
    print "<tr>";
    print "<td>".$schooltripList->getTeacher()->getName()."</td>
        <td></td>
        <td></td>
        <td></td>
        ";
    print "</tr>";

    foreach ($students as $student)
    {
        print "<tr>";
        print "<td></td>
                <td>".$student->getName()."</td>
                <td>".$student->getClassname()->getGroupname()."</td>
                <td>".$student->getPaid()."</td>
                ";
        print "</tr>";
    }
}
print "</table>";
