Uso de cookies. Dos ficherros: formulario.php y respuesta.php

- formulario.php muestra un formulario para rellenar tu nombre
- formulario: método GET, action respuesta.php.
- respuesta.php saluda al nombre enviado ("hola fulanito")
- antes de saludar, respuesta debe guardar una cookie con el 
nombre recibido.
- El formulario.php debe aparecer pre-relleno si ha habido 
visitas previas. 
- Las visitas previas se guardan en la cookie.


NOTA: Si funcion intenta usar el operador ternario:

echo isset($_COOKIE['nombre']) ? $_COOKIE['nombre']) : ''