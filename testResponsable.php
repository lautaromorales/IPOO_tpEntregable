<?php
//test de la clase Responsable
include_once 'ResponsableV.php';
$unObjResponsable = new ResponsableV(1025, "45AA789", "Marcos", "Ramirez");
//Función ingresar responsable, para ingresar y/o modificar los datos del empleado responsable

function ingresarResp($paramArray){
    $unObjResponsable = $paramArray;
    include_once 'ResponsableV.php';
    echo "Nombre del empleado: ";
    $nombreEmp = trim(fgets(STDIN));
   $unObjResponsable->setNombreResponsable($nombreEmp); 
    echo "\n Apellido del empleado: ";
    $apellidoEmp = trim(fgets(STDIN));
   $unObjResponsable->setApellidoResp($apellidoEmp);
    echo "\n Número de empleado: ";
    $numEmpleado = trim(fgets(STDIN));
   $unObjResponsable->setNroEmpleado($numEmpleado);
    echo "\n Número de licencia: ";
    $numLicencia = trim(fgets(STDIN));
    $unObjResponsable->setNroLicencia($numLicencia);    
    //$unObjResponsable = new ResponsableV($numEmpleado, $numLicencia, $nombreEmp, $apellidoEmp);
    return $unObjResponsable;
}



