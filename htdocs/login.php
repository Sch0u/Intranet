<?php 

$SERVER = ['localhost'];
$DBUSERNAME = ['root'];
$DBPASSWORD = [''];


$conn = new mysqli_connect($SERVER, $DBUSERNAME, $DBPASSWORD);


if (!$conn){
echo("Connection failed");
}else{
    echo("Connection established");
}




?>