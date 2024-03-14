<?php

namespace Hospital;

class Appointment
{
    private $patient;
    private $doctor;
    private $nurses;
    private $beginTime;
    private $endTime;
    public static $count = 0;
    public static $appointments = [];

    public function setAppointment($patient, $doctor, $nurses, $beginTime, $endTime)
    {
        $this->patient = $patient;
        $this->doctor = $doctor;

        foreach($nurses as $nurse)
        {
            $this->addNurse($nurse);
        }
        $this->beginTime = $beginTime;
        $this->endTime = $endTime;

        self::$count++;
        self::$appointments[] = $this;
    }

    public function addNurse($nurse)
    {
        $this->nurses[] = $nurse;
    }

    public function getDoctor() {return$this->doctor;}
    public function getPatient() {return$this->patient;}
    public function getNurses() {return$this->nurses;}
    
    public function getBeginTime() {return$this->beginTime->format("d-m-y H:i");}
    public function getEndTime() {return$this->endTime->format("d-m-y H:i");}

    public function getTimeDifference()
    {
        $timeDiff = $this->beginTime->diff($this->endTime);
       $partOfHour = ($timeDiff->format("%i")/60)*100;

        return $timeDiff->format("%i").".".$partOfHour;
        
        
    }

    public function getCosts()
    {
        $time = $this->getTimeDifference();
        $doctorCosts = $time * $this->doctor->getSalary();
        $nurseCosts = 0;
        foreach ($this->nurses as $nurse)
        {
            $nurseCosts += $time * $nurse->getSalary();
        }
        return $doctorCosts + $nurseCosts;
    }
}