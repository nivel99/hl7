<?php
require 'vendor/autoload.php';

use Aranyasen\HL7; // HL7 factory class
use Aranyasen\HL7\Message; // If Message is used
use Aranyasen\HL7\Segment; // If Segment is used
use Aranyasen\HL7\Segments\MSH; // If MSH is used
use Aranyasen\HL7\Segments\PID;

// Crear un mensaje HL7
$msg = new Message();
$msh = new MSH();
$msg->addSegment($msh);

// Agregar el segmento PID
$pid = new PID();
$pid->setField(3, '123456789'); // Set Patient Identifier List (PD1.3)
$pid->setField(5, 'Juan^Perez'); // Set Patient Name (PD1.5)
$pid->setField(7, '19851115'); // Set Date/Time Of Birth (PD1.7)
$pid->setField(8, 'M'); // Set Administrative Sex (PD1.8)
$pid->setField(11, '456 Elm St^^Springfield^IL^12345^US'); // Set Patient Address (PD1.11)
$pid->setField(13, '(555) 123-4567'); // Set Phone Number - Home (PD1.13)
$msg->addSegment($pid);

// Obtener la representación en cadena del mensaje
$hl7String = $msg->toString(true);

echo $hl7String;

//El código está utilizando la biblioteca aranyasen/hl7 para construir un mensaje HL7.
//Primero, se crea un objeto Message vacío con $msg = new Message();.
//Luego, se agrega un segmento MSH (Mensaje de Encabezado) al mensaje utilizando un objeto MSH con $msh = new MSH(); y se agrega al mensaje con $msg->addSegment($msh);.
//Después, se crea un segmento PID (Identificación del Paciente) utilizando un objeto PID con $pid = new PID();.
//A continuación, se establecen campos en el segmento PID utilizando el método setField():
//$pid->setField(3, '123456789'); establece el campo 3 (Patient Identifier List) con el valor '123456789'.
//$pid->setField(5, 'Juan^Perez'); establece el campo 5 (Patient Name) con el valor 'Juan^Perez'.
//$pid->setField(7, '19851115'); establece el campo 7 (Date/Time Of Birth) con el valor '19851115'.
//$pid->setField(8, 'M'); establece el campo 8 (Administrative Sex) con el valor 'M'.
//$pid->setField(11, '456 Elm St^^Springfield^IL^12345^US'); establece el campo 11 (Patient Address) con el valor '456 Elm St^^Springfield^IL^12345^US'.
//$pid->setField(13, '(555) 123-4567'); establece el campo 13 (Phone Number - Home) con el valor '(555) 123-4567'.


?>