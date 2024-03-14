<?php

namespace Hospital;

class Doctor extends Staff {
    public function setSalary($amount)
    {
        $this->salary = $amount;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}