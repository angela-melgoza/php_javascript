<?php

function saludar(){
    return 'Hola mundo';
}
function saludaMe($nombre='Desconocido'){ //Si le ponemos nombre = algo, ese algo va a ser el default si no le ponemos nada.
    return 'Hola '.$nombre;
}

//Llamada a funcion
echo saludar();
echo '<br/>'; //Etiqueta HTML para hacer un salto de linea
echo saludaMe('Angela');
echo '<br/>';
echo saludaMe();

?>
