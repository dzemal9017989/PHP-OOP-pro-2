<?php 

namespace Hospital;

abstract class Staff extends Person {
    protected $salary;
    abstract public function setSalary($amount);
}