<?php

    class Toc{
        function __construct($id=null, $class=null, $numbers=True) {
            $this->table = array();
            $this->i = 1;
            $this->numbers = $numbers;
        }

        function add($s) {
            $this->table[$this->i] =  '<a href="#t' . $this->i . '">' . $s . "</a>";
            
            if ($this->numbers)
                $r = $this->i . ' <a name="t' . $this->i . '">' . $s . "</a>";
            else
                $r = '<a name="t' . $this->i . '">' . $s . "</a>";
            $this->i += 1;
            return $r;
        }
       
        function ht_echo($numbersToc=True) {
            //var_dump($this->table);
            foreach ($this->table as $i => $s) {
                if ($numbersToc)
                    echo $i . " " . $s . "<br>\n";
                else
                    echo $s . "<br>\n";
            }
            return;
        }
    }
    
?>