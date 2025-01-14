<?php
// Inicializar contador
$contador = 0;

// Ruta del archivo donde se almacenará el contador
$archivo = 'counter.txt';

// Verificar si el archivo existe
if (file_exists($archivo)) {
    // Abrir el archivo en modo lectura
    $fd = fopen($archivo, 'r');
    // Leer el valor actual del contador
    $contador = (int)fgets($fd);
    fclose($fd);
}

// Incrementar el contador
$contador++;

// Abrir el archivo en modo escritura para guardar el nuevo valor
$fd2 = fopen($archivo, 'w');
fwrite($fd2, $contador);
fclose($fd2);

// Mostrar el contador actualizado
echo "Contador basado en archivo: " . $contador;
?>
