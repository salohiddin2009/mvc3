<?php

namespace Model\Connect;

class select extends Connect {
    
    public static $where = [];
    public static $query;

    public static function where($col, $require)
    {
       return self::$where[] = [
            $col=>$require,
       ]; 
    }

    public static function get($tablename, $col="*")
    {
        if (self::$where) {
            $sql = "";
            foreach (self::$where as $key => $value) {
                $sql .= "$key = '$value'";
            }
            self::$query = "SELECT $col FROM $tablename WHERE $sql";
        }else{
            self::$query = "SELECT $col FROM $tablename";
        }
    }
    


    public static function count($tablename)
    {
        if (self::$where) {
            $sql = "";
            foreach (self::$where as $key => $value) {
                $sql .= "$key = '$value'";
            }
            self::$query = "SELECT COUNT(*) FROM $tablename WHERE $sql";
        }else{
            self::$query = "SELECT COUNT(*) FROM $tablename";
        }
    }
    
    
    public function go()
    {
        return mysqli_fetch_assoc(
            mysqli_query($this->run(), self::$query)
        );
    }
}