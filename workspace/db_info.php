<?php
   //Connect to the database
    $host = "localhost";
    $user = "root";                     //Your Cloud 9 username
    $pass = "";                                 //Remember, there is NO password by default!
    $db = "hairjjang";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

    $conn = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    mysql_set_charset($conn, 'utf8');
?>