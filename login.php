<?php

$servername="localhost";
$username="root";
$pass="";
$base="stage";
try{
    $cnx= new PDO ("mysql:host=$servername;dbname=$base",$username,$pass);
        if ($cnx==null){ 
            echo "erreur";}
        else { echo ".";}
} 
catch(PDOException $e)
{
    echo "connection a la base de donnes failed: ".$e->getMessage();
}

?>