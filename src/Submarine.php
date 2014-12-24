<?php
namespace Submarine;

/**
 * Importing all the RDBMS databases classes.
 */
require_once __DIR__ . '/classes/databases/rdbms/Cubrid.php';
require_once __DIR__ . '/classes/databases/rdbms/Firebird.php';
require_once __DIR__ . '/classes/databases/rdbms/IBM.php';
require_once __DIR__ . '/classes/databases/rdbms/Informix.php';
require_once __DIR__ . '/classes/databases/rdbms/MsSQLServer.php';
require_once __DIR__ . '/classes/databases/rdbms/MySQL.php';
require_once __DIR__ . '/classes/databases/rdbms/Oracle.php';
require_once __DIR__ . '/classes/databases/rdbms/PostgreSQL.php';
require_once __DIR__ . '/classes/databases/rdbms/SQLite.php';
/**
 * Importing all the NoSQL databases classes.
 */
require_once __DIR__ . '/classes/databases/nosql/CassandraDB.php';
require_once __DIR__ . '/classes/databases/nosql/CouchDB.php';
require_once __DIR__ . '/classes/databases/nosql/MongoDB.php';

/**
 * Setting all the namespaces.
 */
use Submarine\DataBases\RDBMS\Cubrid;
use Submarine\DataBases\RDBMS\Firebird;
use Submarine\DataBases\RDBMS\IBM;
use Submarine\DataBases\RDBMS\Informix;
use Submarine\DataBases\RDBMS\MsSQLServer;
use Submarine\DataBases\RDBMS\MySQL;
use Submarine\DataBases\RDBMS\Oracle;
use Submarine\DataBases\RDBMS\PostgreSQL;
use Submarine\DataBases\RDBMS\SQLite;
use Submarine\DataBases\NoSQL\CassandraDB;
use Submarine\DataBases\NoSQL\CouchDB;
use Submarine\DataBases\NoSQL\MongoDB;

class Main {
    public function __construct() 
    {
        echo 'hola k tal';
        
        echo "\n";
        $prueba = new DataBases\RDBMSs\MySQL();
        $prueba->setTabla("voluntarios");
        $prueba->select("tu vieja");
        $prueba->where("condicion");
        $prueba->notBetweenAnd (6, 10);
        $prueba->groupBy("voluntarios");
        
        
        $prueba->select("hola k tal", $prueba->AS("hola"));
        
        
        echo $prueba->getQuery() . ";";
       //EL EXECUTE TIENE QUE AGREGAR EL ;
        
    }
}