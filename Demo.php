<?php

class Demo
{
    private $idpersona;
    private $nombre;
    private $cedula;
    private $tipo;
    private $fechanacimiento;

     function __construct($idpersona,$nombre,$cedula,$tipo,$fechanacimiento) {
       $this->idpersona = $idpersona;
       $this->nombre = $nombre;
       $this->cedula = $cedula;
 	$this->tipo = $tipo;
       $this->fechanacimiento = $fechanacimiento;
     }
    
     function setIdPersona($idpersona){
       $this->idpersona= $idpersona;
     } 
     function getIdPersona(){
       return $this->idpersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
 	

	function setCedula($cedula){
       $this->cedula = $cedula;
     } 
     function getCedula(){
       return $this->cedula;
     } 


function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 

function setFechanacimiento($fechanacimiento){
       $this->fechanacimiento = $fechanacimiento;
     } 
     function getFechanacimiento(){
       return $this->fechanacimiento;
     } 



}

?> 
