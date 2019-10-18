# Galería

- Vamos a crear una galería de imágenes.
- Clase App con varios métodos. 
- Vista de tabla y de detalle.
- Método index. Muestra el contenido de las imágenes subidas al directorio pictures.
    - Debe mostrarse en formato tabla y con un tamaño fijo para cada imagen (p. ejemplo ancho 100).
    - Cada imagen debe tener un hiperenlace al detalle de la imágen.
    - En la cabecera o pie debe haber un formulario donde se pueden subir nuevas imágenes. El formulario puede debe enviar las imágenes al método upload. Ver https://www.w3schools.com/php/php_file_upload.asp
- Método upload. Recoge la imagen y la deposita en el directorio pictures. Una vez hecho esto reenvía la petición al método index
- Método show. Muestra la imagen en una vista con el nombre del fichero y un enlace al método delete para borrar la imagen.
- Método delete. Tras borrar la imagen del directorio pictures se retorna al index.

- Posibles mejoras:
    - No permitir sobreescribir ficheros. Que avise que ya existe.
    - Comprobar que la extensión es propia de una imagen (png, jpg, jpeg, bmp, gif)
    - Comprobar que el tamaño no excede determinado límite