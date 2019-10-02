Uso de sesiones. 
Tres ficherros: formulario.php, respuesta.php y sesion.php

- formulario.php muestra un formulario para rellenar tu nombre
- formulario: método GET, action respuesta.php.
- respuesta.php saluda al nombre enviado ("hola fulanito")
- antes de saludar, respuesta debe guardar en sesión el 
nombre recibido.
- sesion.php dice si estás logueado con tu nombre o si la sesión está sin iniciar.
    
NOTA: Si funcion intenta usar el operador ternario:

echo isset($_COOKIE['nombre']) ? $_COOKIE['nombre']) : ''