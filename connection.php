<?php

    $database= new mysqli("localhost","root","","edoc_clinic");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>