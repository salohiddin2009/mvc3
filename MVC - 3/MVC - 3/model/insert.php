<?php

namespace Model\Connect;

class Insert extends Connect{
    
    public $cols = "";
    public $values ="";

    public function insert($tablename)
    {
        return "INSERT INTO $tablename($this->cols) VALUES($this->values)";
    }
    
}