<?php
include_once 'Pasajero.php';
include_once 'testViaje.php';
include_once 'Viaje.php';


function cargarPasajeros(){
    include_once 'Pasajero.php';
    $cantPasajeros = count ($unObjPasajero);
    $i = $cantPasajeros+1;
    echo "Ingrese nombre del pasajero: ";
    $nomPas = trim(fgets(STDIN));
    $unObjPasajero[$i]->setNombre($nomPas);
    echo "Apellido del pasajero: ";
    $apPasajero = trim(fgets(STDIN));
    $unObjPasajero[$i] ->setApellido($apPasajero);
    echo "Numero de documento: ";
    $nroDoc = trim(fgets(STDIN));
    $unObjPasajero[$i] ->setNroDocumento($nroDoc);

}

function modificarPasajero($unObjPasajero){
   
    echo "¿De qué número de pasajero desea modificar datos?";
    $numPasajero = trim(fgets(STDIN));
    $i = $numPasajero -1;

    echo "¿Qué dato del pasajero quiere modificar?";
    echo "\n 1. Nombre \n 2. Apellido \n 3. Número de documento \n 4. Teléfono ";
    $valPas = trim(fgets(STDIN));
    if($valPas == 1){
        $nuevoNombre  = readline("\n Ingrese el nombre: ");
        $unObjPasajero [$i]->setNombre($nuevoNombre);
    }elseif ($valPas== 2) {
        $nuevoApellido = readline("\n Ingrese el nuevo apellido: ");
        $unObjPasajero[$i]->setApellido($nuevoApellido);
    }elseif ($valPas == 3) {
        $nuevoDoc = readline ("\n Ingrese nuevo documento: ");
        $unObjPasajero[$i]->setDocumento($nuevoDoc);
    }elseif ($valPas == 4) {
        $nuevoTel = readline("\n Ingrese nuevo telefono: ");
        $unObjPasajero[$i]->setTelefono($nuevoTel);
    }
}

function mostrarPasajeros ($arrayPasajeros){
    
    foreach($arrayPasajeros as $key => $valor){
        echo "Pasajero ".$key. ".".$valor;
        }
}
//Funcion que verifica que no haya datos de pasajeros reptidos
function inArray($miArrayPasajeros){
    $valDoc= $miArrayPasajeros->getNroDocumento();
    if (in_array($valDoc, $miArrayPasajeros)){
        echo "¡Pasajero repetido!";
    }
}