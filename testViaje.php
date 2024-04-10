<?php
include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'ResponsableV.php';
include_once 'testResponsable.php';
include_once 'testPasajero.php';

//Menú que permite cargar información del viaje, modificarla y ver sus datos
//Creo una instancia de la clase viaje 
//$unOnjPasajero [$i]


$unViaje = new Viaje("AA1540C", "Zapala", 50, $unObjPasajero[$i], $unObjResponsable);

function elegirOpcion(){
  echo  "1) Cargar datos de viaje"."\n".
        "2) Cargar datos de pasajeros"."\n".
        "3) Cargar datos del responsable"."\n".
        "4) Ver datos"."\n".
        "5) Modificar datos"."\n"; 
        "6) Salir";
        $seleccion =readline("\n Selecciona una opción: ");
        return $seleccion;
}

function modificarViaje($unViaje){
    include_once 'Viaje.php';
    echo "¿Qué dato del viaje desea modoficar? "."\n 1. Código del viaje \n 2. Destino \n 3. Cantidad máxima de pasajeros ";
    $valOpcion = trim(fgets(STDIN));
    if ($valOpcion ==1){
        $nuevoCodigo = readline("Ingrese el nuevo código ");
        $unViaje->setCodigoViaje($nuevoCodigo);
    }elseif($valOpcion ==2){
        $nuevoDestino = readline ("Ingrese el nuevo destino");
        $unViaje->setDestino($nuevoDestino);
    }elseif($valOpcion ==3){
        $nuevaCant = readline("Ingrese la capacidad máxima");
        $unViaje->setCantMaxPas($nuevaCant);
    }
}


do {
    $opc = elegirOpcion();
    switch ($opc) {
        case '1':
            //Cargar datos de viaje
           
            echo "Ingrese los siguientes datos: ";
            echo "\n"."Destino: ";
            $dest = trim(fgets(STDIN));
            $unViaje->setDestino($dest);
            echo "\n"."Código de viaje: ";
            $codViaje = trim(fgets(STDIN));
            $unViaje->setCodigoViaje($codViaje);
            echo "Cantidad máxima de pasajeros: ";
            $cmPas = trim(fgets(STDIN));
            $unViaje->setCantMaxPas($cmPas);
            
            break;
        
    case '2'://CASO 2 PARA CARGAR DATOS DEL USUARIO
            $i= 0;
            do {
            echo "Ingrese nombre del pasajero: ";
            $nomPas = trim(fgets(STDIN));
            echo "Apellido del pasajero: ";
            $apPasajero = trim(fgets(STDIN));
            echo "Numero de documento: ";
            $nroDoc = trim(fgets(STDIN));
            echo "Número de teléfono del pasajero: ";
            $nroTel = trim(fgets(STDIN));
            $unObjPasajero [$i]=new Pasajero ($nomPas,$apPasajero, $nroDoc, $nroTel);
            $verificador = inArray($unObjPasajero[$i]);
            if($unViaje->getCantMaxPasajeros()== $i){
                $nroDoc = 20;
            }
            $i++; 
        }while($nroDoc<>20);
            break;
            
        case '3'://CASO 3 CARGAR DATOS DEL EMPLEADO
            echo "\n 1) Ver los datos del empleado". 
                "\n 2) Cargar los datos del empleado";
                $opcEmp = readline("\n Seleccione su consulta: ");
            if ($opcEmp == 1){
                echo $unObjResponsable;
            }elseif ($opcEmp == 2){
                $modif = ingresarResp($unObjResponsable);
            }else{
                echo "La opción ingresada no es válida";
            }
        break;
        case '4'://CASO 4 VISUALIZACIÓN DE DATOS
            
            echo "Eliga que datos desea ver.
            \n 1. Datos del viaje.
            \n 2. Datos de los pasajeros.
            \n 3. Datos del empleado responsable."."\n";
            $sel = trim(fgets(STDIN));
            if ($sel == 1){
                echo $unViaje;
            }elseif ($sel == 2){
                $verPasajeros = mostrarPasajeros($unObjPasajero);
                    
            }elseif($sel ==3){
                echo $unObjResponsable;
            }//echo $unObjResponsable; No es necesario pues ya muestra los datos en el __ToString de $unViaje
            break;
         case '5'://Modificar datos
            echo "seleccione una opcion";
            echo "\n 1) Modificar datos del viaje "."\n 2) Modificar datos de un pasajero "."\n 3) Modifificar datos del responsable ";
            $opcMod= trim(fgetc(STDIN));
            if ($opcMod == 1){
                $cambioViaje= modificarViaje($unViaje);
            }elseif ($opcMod == 2) {
                $cambioPasajero = modificarPasajero($unObjPasajero);
            }elseif($opcMod == 3){
                $newResponsable = ingresarResp($unObjResponsable);
            }
    }
} while ($opc<>6);
