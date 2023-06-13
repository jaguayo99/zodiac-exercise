<?php
require_once "zodiac_functions.php";
require_once "config/db.php";
require_once "./controlSesion.php";

pageTop("Create zodiac DB", BACK_MENU);
    // Crear la base de datos
    try{
        $conn->exec("CREATE DATABASE zodiac_signs;");
        echo "Base de datos creada correctamente<br>";
    }
    catch(PDOException $e){
        echo "Error al crear la base de datos: " . $e->getMessage() . "<br>";
        echo "Estaba base de datos ya existe";
    }
    

pageBottom("2020-11-20");

