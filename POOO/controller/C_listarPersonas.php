<?php
    require('../model/Conexion.php');

    $db = new Conexion();
    $personas = $db->getPersona();
?>