<?php

namespace Model\Connect;

class Connect 
{
    public $database;
    
    public function run()
    {
        $conf_database = require("config/database.php");        
        return $this->database = mysqli_connect(
            $conf_database["hostname"],
            $conf_database["username"],
            $conf_database["password"],
            $conf_database["database"],
        );
    }
}
