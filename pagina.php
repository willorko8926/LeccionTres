<?php
include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdPersona() . "  && " .$c->getNombre() . " && " .$c->getCedula() . " && " .$c->getTipo(). " && " .$c->getFechanacimiento();                                     
  echo "</div>"; 
}


?>
