<?php

    //connection bdd ---début//
    $conn = new mysqli("localhost","root","","fst");

    //force en UTF-8 ---début//
    $conn->query('SET NAMES utf8');
    //fin//

    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }
    //fin de connection//
?>