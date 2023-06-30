<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    echo 'Connected successfully';

    // Create database
    $db_selected = mysqli_select_db($conn, 'uts_web');

?>