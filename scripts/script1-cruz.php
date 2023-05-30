<?php
/**
*Este es un ejemplo de documentación de PHP
*
*@autor Elisabeth
*@version 1.0.1
*/

/**
*Este es un comentario de documentación en PHP que describe la función holaMundo
*
*
*@param string $nombre el nombre de la persona a saludar
*@return string la cadena "Hola, nombre!"
*/

function holaMundo($nombre) {
	return "Hola, " . $nombre . "!";
}

/**
*Este es un comentario de documentación en PHP que describe la función saberEdad
*
*@param string $edad la edad de la persona
*@return string la cadena "Tienes edad años."
*/
function saberEdad($edad) {
        return "Tienes " . $edad . " años.";
}

?>
