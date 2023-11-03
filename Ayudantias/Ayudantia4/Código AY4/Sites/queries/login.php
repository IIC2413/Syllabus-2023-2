<?php
session_start();
include('../templates/header.html');

if (isset($_SESSION['username'])) {
    echo "<h2 class='subtitle'>Bienvenido, {$_SESSION['username']}!</h2>";
} else{
    echo "<h2 class='subtitle'>No hay usuario</h2>";
}
?>