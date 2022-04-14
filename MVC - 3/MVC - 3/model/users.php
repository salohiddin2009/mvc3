<?php

namespace Model\Connect;
use Model\Connect\select;
class Users extends Connect 
{
    private $tabelname = "users";
    private $limit;
    private $offset;
    private $count;

    // function onerow;
    public function onerow($id)
    {
        $query = mysqli_query($this->database,"SELECT * FROM ".$this->tabelname." WHERE ID = $id");
        $result = mysqli_fetch_assoc($query);
        return $result;
    }

    // function count;
    public function count()
    {
        select::count($this->tablename);
        return (new \Model\Connect\select())->go();
    }
    // function limit;
    public function limit($num)
    {
        select::limit($this->tablename);
        return (new \Model\Connect\select())->go();
    }    

    // function offset; 
    public function offset($num)
    {
        select::offset($this->tablename);
        return (new \Model\Connect\select())->go();
    }
    // function all;
    public function all()
    {
        if ($this->limit) {
            $result = mysqli_fetch_all(mysqli_query($this->database,"SELECT * FROM '.$this->tabelname.' LIMIT '.$this->limit.'"));
        }
        elseif ($this->limit and $this->offset) {
            $result = mysqli_fetch_all(mysqli_query($this->database,"SELECT * FROM".$this->tabelname."LIMIT".$this->limit."OFFSET".$this->offset));
        }else{
            $result = mysqli_fetch_all(mysqli_query($this->database,"SELECT * FROM .$this->tabelname."));
        }

        return $result;
    }        
}