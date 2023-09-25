<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="3180";

    $bd="r/h";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
