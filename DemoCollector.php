<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'idpersona'},$c{'nombre'},$c{'cedula'},$c{'tipo'},$c{'fechanacimiento'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  function showDemo($id){
    $row = self::$db->getRows("SELECT * FROM persona where idpersona= ? ", array("{$id}"));

    $ObjDemo = new Demo($row[0]{'idpersona'},$row[0]{'nombre'},$row[0]{'cedula'},$row[0]{'tipo'},$row[0]{'fechanacimiento'});
    return $ObjDemo;

}


function updateDemo($id,$nombre,$cedula,$tipo,$fechanacimiento){
$insertrow = self::$db->updateRow("UPDATE public.persona SET nombre= ?, cedula= ?, tipo= ?, fechanacimiento= ? WHERE idpersona= ?", array("{$nombre}","{$cedula}","{$tipo}","{$fechanacimiento}",$id));
}




function deleteDemo($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.persona WHERE idpersona= ?", array("{$id}"));

}

function createDemo($nombre,$cedula,$tipo,$fechanacimiento){
	$insertarrow = self::$db->insertRow("INSERT INTO public.persona (nombre,cedula,tipo,fachanacimiento) VALUES (?,?,?,?)", array ("{$nombre}","{$cedula}","{$tipo}","{$fechanacimiento}"));
	

}

}
?>

