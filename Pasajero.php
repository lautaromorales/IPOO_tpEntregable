<?php
class Pasajero {
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $telefono;
    
    public function __construct($name, $surname, $idPasajero, $numTel){
        $this->nombre= $name;
        $this->apellido = $surname;
        $this->nroDocumento =$idPasajero;
        $this->telefono = $numTel;
    }
    
    //** MÉTODO MÁGICO GET *//
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return  $this->apellido;
    }
    public function getNroDocumento(){
        return  $this->nroDocumento;
    }
     public function getTelefono(){
       return $this->telefono;   
    }
    
    //** MÉTODO MÁGICO GET  */
    public function setNombre ($setNombre){
        $this->nombre = $setNombre;
    }
    public function setApellido ($setearApellido){
        $this->apellido = $setearApellido;
    }
    public function setNroDocumento ($setearDoc){
        $this->nroDocumento = $setearDoc;
    }
    public function setTelefono ($setearTel){
     $this->telefono = $setearTel;
    }

    public function __toString()
    {
       return "\n"."Nombre: ".$this->getNombre()." Apellido: ".$this->getApellido()." El documento es: ".$this->getNroDocumento()." Teléfono: ".$this->getTelefono()."\n";
    }
    


}

