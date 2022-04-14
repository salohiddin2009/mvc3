<?php

namespace Model\Connect;
 
class Chat extends Connect 
{
    private $tabelname = "chat";
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
        $this->count = mysqli_fetch_assoc(mysqli_query($this->database,"SELECT count(*) FROM $this->tabelname"));
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