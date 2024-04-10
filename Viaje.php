<?php
include_once 'ResponsableV.php';
include_once 'Pasajero.php';

//Clase viaje
class Viaje {
    private $codigoViaje;
    private $destino;
    private $cantMaxPas;
    private $objPasajerosViaje;
    private $objResponsable;

    //Función del método constructor
    public function __construct($paramCodVi, $paramDestino, $paramCantMaxPas, $paramPasajViaje, $pObjResp){
        $this->codigoViaje= $paramCodVi;
        $this->destino = $paramDestino;
        $this->cantMaxPas = $paramCantMaxPas;
        $this->objPasajerosViaje = $paramPasajViaje;
        $this->objResponsable = $pObjResp;
    }

    //** MÉTODOS MÁGICOS "GETTERS" *//
    public function getCodigoViaje (){
        return $this->codigoViaje; 
    }
    public function getDestino (){
        return $this->destino;
    }
    public function getCantMaxPasajeros (){
        return $this->cantMaxPas;
    }
    public function getPasajerosViaje (){
        return $this->objPasajerosViaje;
    }
    public function getObjResponsable(){
        return $this->objResponsable;
    }

    //** MÉTODOS MÁGICOS "SETTERS"  *//
    public function setCodigoViaje ($setearCodigo){
        $this->codigoViaje = $setearCodigo;
    }
    public function setDestino ($setDestino){
        $this->destino = $setDestino;
    }
    public function setCantMaxPas ($setCantMaxp){
        $this->cantMaxPas = $setCantMaxp;
    }
    public function setPasajerosViaje ($setPasajeros){
        $this->objPasajerosViaje = $setPasajeros;
    }
    public function setObjResponsable($setResponsable){
        $this->objResponsable = $setResponsable;
    }
    // Metodo __toString, para convertir los atributos del objeto en una cadena de caracteres
    public function __toString()
    {
        return "El codigo del viaje es : ".$this->getCodigoViaje().". El destino es ". $this->getDestino().
        ". La capacidad máxima de pasajeros es ". $this->getCantMaxPasajeros().". El responsable del viaje es ". $this->getObjResponsable();
    }    
    
}