<?php
// database connection

function Connection(){
    
    $server ="127.0.0.1";
    $user = "root";
    $pwd = "";
    $database = "Goldenlions"; // your database name here


    $conn = mysqli_connect($server,$user,$pwd,$database);

    if(mysqli_connect_error($conn)){
        return(null);
    }
    else{
        return($conn);
    }
}
?>