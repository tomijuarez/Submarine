<?php

namespace Submarine\DataBases;

require_once __DIR__ .'/../DataBase.php';

use Submarine\DataBase;

class RDBMS extends DataBase 
{
    function select ($atribs)
    {
        $query .= "SELECT" . $atribs; 
    }
    
}