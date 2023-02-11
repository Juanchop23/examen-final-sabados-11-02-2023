<?php

    $conexion = mysqli_connect("localhost", "root", "", "encuestagaseosa") or
        die("Problemas con la conexión");

    #EJECUTAR CONSULTA EN LA BD
    mysqli_query($conexion, "INSERT INTO datos(nombre,documento,sino,tipogaseosa) VALUES 
                       ('$_REQUEST[nombre]','$_REQUEST[documento]','$_REQUEST[sitoma]', '$_REQUEST[tipogaseosa]')")
        or die("Problemas con la BD" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "Infomación enviada con éxito";
?>