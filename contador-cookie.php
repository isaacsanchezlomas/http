
<?php
// Verificar si ya existe la cookie 'count'
if (isset($_COOKIE['count'])) {
    // Incrementar el valor de la cookie
    $count = $_COOKIE['count'] + 1;
} else {
    // Inicializar el contador si la cookie no existe
    $count = 1;
}

// Establecer o actualizar la cookie 'count'
setcookie('count', $count, time() + 3600); // Duración de 1 hora

// Mostrar el valor del contador
echo "Contador de cookies: " . $count;
?>
