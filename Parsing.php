<?php
require 'vendor/autoload.php';

use Aranyasen\HL7; // HL7 factory class
use Aranyasen\HL7\Message; // If Message is used
use Aranyasen\HL7\Segment; // If Segment is used
use Aranyasen\HL7\Segments\MSH; // If MSH is used

// Crear un mensaje HL7
$msg = new Message("MSH|^~\\&|1|\rPID|||abcd|\r"); // Either \n or \r can be used as segment endings
//En este bloque, estás requiriendo la carga automática de las clases de la biblioteca utilizando require 'vendor/autoload.php';.
//Luego, utilizas las declaraciones use para importar las clases relevantes de la biblioteca. Esto permite que puedas referenciar esas clases directamente en tu código sin usar los nombres de espacio completos.
//Creas un nuevo objeto Message pasando un mensaje HL7 como argumento al constructor. En este caso, el mensaje es "MSH|^~\\&|1|\rPID|||abcd|\r". Este es un mensaje HL7 simple con un segmento MSH y un segmento PID. El constructor acepta una cadena que representa el mensaje HL7.

$pid = $msg->getSegmentByIndex(1);
//Aquí, estás recuperando el primer segmento del mensaje utilizando el método getSegmentByIndex(1). En este caso, el primer segmento es el segmento PID.
//Luego, estás utilizando el método getField(3) para obtener el tercer campo del segmento PID. En el mensaje proporcionado, el tercer campo contiene el valor 'abcd'.
//Finalmente, estás usando echo para imprimir el valor 'abcd' en la salida.
echo $pid->getField(3); // prints 'abcd'


echo $msg->toString(true); // Prints entire HL7 string
//Aquí, estás utilizando el método toString(true) para convertir el objeto Message completo de vuelta a una cadena HL7. El argumento true le dice a la función que use saltos de línea (\r) para separar los segmentos del mensaje.
//Luego, estás usando echo para imprimir el mensaje HL7 completo en la salida.

//En resumen, este código muestra cómo crear un objeto Message a partir de una cadena HL7, acceder a segmentos y campos específicos dentro del mensaje y convertir el objeto Message nuevamente en una cadena HL7 para su impresión.


?>