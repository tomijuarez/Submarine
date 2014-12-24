<?php
namespace Submarine;

require_once __DIR__ . '/ExecuteOperations.php';

use Submarine\ExecuteOperations;

abstract class DataBase 
{
    //The query that will be use by the children class
    protected $query = "";
    //Esto va a tener el nombre de la tabla que queremos consultar, desp cambiar para soportar multitabla
    protected $tabla = "";
    
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;
    }
    
    public function getQuery()
    {
        return $this->query;
    } 
    
}