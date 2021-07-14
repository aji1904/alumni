<?php
    $DATABASE = 'alumni';
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';

    $CONNECT = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
    
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    
    

?>