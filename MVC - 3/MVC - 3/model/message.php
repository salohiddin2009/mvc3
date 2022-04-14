<?php

namespace Model\Connect;
use Model\Connect\select;

class Message extends Connect 
{
    private $tabelname = "message";
    private $limit;
    private $offset;
    private $count;

    // function onerow;
    public function onerow($id)
    {
        select::where("id", $id);
        select::get("message");
        return (new \Model\Connect\select())->go();
    }

    // function count;
    public function count()
    { 
        $query = mysqli_query($this->database,"SELECT count(*) FROM $this->tabelname");
        $this->count = mysqli_fetch_assoc($query);
        return $this->count;
    }
    // function limit;
    public function limit($num)
    {
        $this->limit = $num;
        return $this->limit;
    }    

    // function offset; 
    public function offset($num)
    {
        $this->offset = $num;
        return $this->offset;
    }

    // function all
    public function all()
    {
        select::get("message");
        return (new \Model\Connect\select())->go(); 
    }        
}












