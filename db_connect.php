<?php
$conn = new mysqli('localhost', 'root', '', 'gestion-pagos','3310') or die("Could not connect to mysql" . mysqli_error($con));
    if($conn->connect_errno)
        {
            echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit();
        }
?>