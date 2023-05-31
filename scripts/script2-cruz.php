<?php
/**
*Este es un ejemplo de documentación de PHP
*
*@autor Elisabeth
*@version 1.0.1
*@copyright ely
*@deprecated No disponible en futuras versiones
*/

/**
*Este es un comentario de documentación en PHP que describe la clase holaMundo
*/

class holaMundo {
	/**
	*Este es un comentario de documentación en PHP que describe la función holaMundo
	*
	*@param string $nombre el nombre de la persona a saludar
	*@return string la cadena "Hola, nombre!"
	*/
	function saludar($nombre){
		return "Hola, ". $nombre;
	}
	
	/**
	*Este es un comentario de documentación en PHP que describe la función sumar
	*
	*@param integer $num1 primer número de la operación
	*@param integer $num2 segundo número de la operación
	*@return integer resultado de la suma de num1 y num2
	*/
	
	function sumar($num1, $num2){
		return $num1+$num2;
	}
}
?> 

