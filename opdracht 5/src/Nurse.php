<?php

namespace Hospital;

class Nurse extends Staff 
{
    public function setSalary($ammount)
    {
        $this->salary = $ammount;
    }

    public function getSalary()
    {
        return $this->salary/40;
    }
}