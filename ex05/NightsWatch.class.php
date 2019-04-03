<?php

class NightsWatch
{       
    private $_recup = array();

    public function recruit($name)
    {
        $this->_recup[] = $name;
    }
    public function fight()
    {
        foreach($this->_recup as $ol)
        {
            if($ol instanceof IFighter)
            {
                $ol->fight();
            }
        }
    }
}
?>