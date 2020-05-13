<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'php_b3');

    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($con === false){
       die("Error:". mysqli_connect_error());
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id=".$id;

    mysqli_query($con,$sql);

    header('location:index.php');

?>