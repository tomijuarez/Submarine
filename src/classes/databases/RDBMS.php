<?php

namespace Submarine\DataBases;

require_once __DIR__ .'/../DataBase.php';

use Submarine\DataBase;

class RDBMS extends DataBase 
{
    //Select Query
    public function select($atribs)
    {
        $this->query .= "SELECT " . $atribs . " FROM " . $this->tabla; 
    }
    //Select DISTINCT Query (por ahora lo dejo asi, quizás desp lo cambio)
    public function selectDistinct($atribs)
    {
        $this->query .= "SELECT DISTINCT " . $atribs . " FROM " . $this->tabla; 
    }
    //WHERE query
    public function where($atribs)
    {
        //if (ultimo = ; borrarlo)
        //do
        $this->query .= " WHERE " . $atribs; 
    }
    //BETWEEN trata a los valores de los extremos incluidos dentro del rango
    public function betweenAnd($n1, $n2)
    {      
        $this->query .= " BETWEEN " . $n1 . " AND " . $n2;
    }
    //NOT BETWEEN => VER
    public function notBetweenAnd($n1,$n2)
    {
        $this->query .= " NOT ";
        $this->betweenAnd($n1, $n2);
    }
    //AVG 
    public function avg($atrrib) //revisar de poner una , si antes venía otro avg,etc
    {
        $this->query .= " AVG (" . $atrrib .  ")";
    }
    //MIN
    public function min($atrrib) //revisar de poner una , si antes venía otro avg,etc
    {
        $this->query .= " MIN (" . $atrrib .  ")";
    }
    //MAX
    public function max($atrrib) //revisar de poner una , si antes venía otro avg,etc
    {
        $this->query .= " MAX (" . $atrrib . ")";
    }
    //SUM
    public function sum ($atrrib) //revisar de poner una , si antes venía otro avg,etc
    {
        $this->query .= " SUM (" . $atrrib . ")";
    }
    //COUNT
    public function count ($atrrib) //revisar de poner una , si antes venía otro avg,etc
    {
        $this->query .= " COUNT (" . $atrrib . ")";
    }
    //GROUP BY
     public function groupBy ($atrrib) //revisar de poner una , si antes venía otro avg,etc
    {
        $this->query .= " GROUP BY " . $atrrib;
    }
    
    
   /* //Select Query
    public function advancedSelect ($atribs1 , $atribs2)
    {
        $this->query .= "SELECT " . $atribs . " FROM " . $this->tabla; 
    }*/
    
     
    
    //        VERRR
    //CONSULTA MULTITABLA    
    //AS ver si anda en todos los lenguajes
    //IS
    //IS NOT
    //NOT
    //DISTINCT
    //AND
    //OR
    //LIKE
    //SIMILAR TO
    //IS NULL
    //ORDER BY
    //DESC
    //ASC
    //COUNT
    //join  => todos sus casos
    
/*[ORDER BY ... ]

[LIMIT {numero | ALL}]

[OFFSET numero];
 * 
 * 
FROM voluntario;
 * 
 * 

• STDDEV()  desvío estándar de la columna especificada
 * 
 * 
 * La función NVL(columna, valor_reemplazo) en Oracle o la función COALESCE(columna,
 *
 * SELECT id_institucion, COUNT(*) AS cantidad_voluntarios FROM voluntario GROUP BY id_institucion;
 * 
 * SELECT apellido, nombre FROM voluntario WHERE id_coordinador=124 ORDER BY apellido DESC, nombre;
*/
    
    
}