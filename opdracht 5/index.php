<?php
require_once "vendor/autoload.php"; 

use Hospital\Person;
use Hospital\Patient;
use Hospital\Doctor;
use Hospital\Nurse;
use Hospital\Appointment;

$patient1 = new Patient('Jantje','patient', 100);
$patient2 = new Patient('Piet', 'patient', 100);
$patient3 = new Patient('Klaas', 'patient', 100);
$patient4 = new Patient('Eefje', 'patient', 100);

$doctor1 = new Doctor('Mohammed', 'doctor');
$doctor1->setSalary(100);
$doctor2 = new Doctor('Pieter', 'doctor');
$doctor2->setSalary(120);
$doctor3 = new Doctor('Simone', 'doctor');
$doctor3->setSalary(140);

$nurse1 = new Nurse('Jennifer', 'nurse');
$nurse1->setSalary(2400);
$nurse2 = new Nurse('Kelly', 'nurse');
$nurse2->setSalary(2500);
$nurse3 = new Nurse('Xenia', 'nurse');
$nurse3->setSalary(2600);

$appointment1 = new Appointment();
$appointment1->setAppointment($patient1, $doctor1, [$nurse1, $nurse2], new DateTime('2020-04-07 12:00:00'),
new DateTime('2020-04-07 13:00:00'));

$appointment2 = new Appointment();
$appointment2->setAppointment($patient2, $doctor2, [$nurse2, $nurse3],
new DateTime('2020-04-07 14:00:00'), new DateTime('2020-04-07 16:00:00'));

$appointment3 = new Appointment();
$appointment3->setAppointment($patient3, $doctor2, [$nurse2, $nurse3],
new DateTime('2020-04-07 14:00:00'), new DateTime('2020-04-07 16:00:00'));

$appointment4 = new Appointment();
$appointment4->setAppointment($patient4, $doctor3, [$nurse2, $nurse3],
new DateTime('2020-04-07 14:00:00'), new DateTime('2020-04-07 16:00:00'));

print "<pre>";
print "<table border=1>
    <tr>
    <th>Dokter</th>
    <th>Patient</th>
    <th>Verpleegkundige</th>
    <th>Begindatum</th>
    <th>Einddatum</th>
    <th>Prijs</th>
    </tr>";

    foreach(Appointment::$appointments as $appointment) {
        print "<tr>
                <td>".$appointment->getDoctor()->getName()."</td>
                <td>".$appointment->getPatient()->getName()."</td>
                </td>";
                foreach($appointment->getNurses() as $nurse) {
                    print "<li>".$nurse->getName()."</li>";
                }
                print "</td>
                        <td>".$appointment->getBeginTime()."</td>
                        <td>".$appointment->getEndTime()."</td>
                        <td>".$appointment->getCosts()."</td>
                        </tr>";
    }

    print "</table>";