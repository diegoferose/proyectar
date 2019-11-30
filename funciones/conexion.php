<?php 

    $conn = new mysqli('localhost', 'root', '', 'db_prestamos');

    if($conn->connect_error){

        echo $error -> $conn->connect_error;

    }


?>