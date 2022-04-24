<?php 

$connection = new mysqli("localhost", "root", "","auf");
if ($connection->connect_error){
    echo "Connection echouee";
}
else {
    echo "connection etablie";
}
?>
