<?php 
class ResponsableV{
    private $nroEmpleado;
    private $nroLicencia;
    private $nombreResponsable;
    private $apellidoResponsable;

    public function __construct($nroEmp, $nroLic, $nomResp, $apellidoResp){
        $this->nroEmpleado = $nroEmp;
        $this->nroLicencia = $nroLic;
        $this->nombreResponsable = $nomResp;
        $this->apellidoResponsable = $apellidoResp;
    }

    //** MÉTODO MÁGICO GET  **//
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }
    public function getNroLicencia(){
        return $this->nroLicencia;
    }
    public function getNombreResponsable(){
        return $this->nombreResponsable;
    }
    public function getApellidoResp(){
        return $this->apellidoResponsable;
    }
    //** MÉTODO MÁGICO "SET"  **//
    public function setNroEmpleado($nroEmp){
        $this->nroEmpleado = $nroEmp;
    }
    public function setNroLicencia ($nroLic){
        $this->nroLicencia = $nroLic;
    }
    public function setNombreResponsable($nomResp){
        $this->nombreResponsable = $nomResp;
    }
    public function setApellidoResp($apellidoResp){
        $this->apellidoResponsable = $apellidoResp;
    }

    //MÉTODO __toString **//
    public function __toString()
    {
        return $this->getNombreResponsable()." ".$this->getApellidoResp().".\n Empleado N° ".
        $this->getNroEmpleado()."\n Licencia N° ".$this->getNroLicencia()."\n";
    }
    
}