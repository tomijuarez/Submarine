<?php
namespace Submarine;

require_once __DIR__ . '/ExecuteOperations.php';

use Submarine\ExecuteOperations;

abstract class DataBase 
{
    //The query that will be use by the children class
    protected $query ="";
    
}