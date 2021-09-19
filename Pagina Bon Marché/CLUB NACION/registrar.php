<?php

include("cn.php");

    $nombre=$_POST['nombre'];
    $dni=$_POST['dni'];
    $tarclubnacion=$_POST['tarclubnacion'];
    $totalbruto=$_POST['totalbruto'];


    $insertar = "INSERT INTO tarjetas
                (nombre, dni, tarclubnacion, totalbruto) VALUES('$nombre','$dni','$tarclubnacion','$totalbruto')";

    $resultado = mysqli_query($conexion, $insertar);

    header("Location: index.html");

?>