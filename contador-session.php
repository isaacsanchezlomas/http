<?php
session_start(); // Iniciar sesión

// Verificar si ya existe la variable de sesión 'num'
if (isset($_SESSION['num'])) {
    // Incrementar el contador
    $_SESSION['num']++;
} else {
    // Inicializar el contador si no existe
    $_SESSION['num'] = 1;
}

// Mostrar el contador
echo "Contador de sesión: " . $_SESSION['num'];
?>
