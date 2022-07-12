<?php session_start();  
$cin=$_GET['cin'];
$nm=$_GET["nom"];
$d=$_GET["department"];
$t=$_GET["telephone"];
$db=$_GET["debut"];
$fn=$_GET["fin"];
$st=$_GET["stage"];
$pf=$_GET["pdf"];  
$ml=$_GET['mail'];
require('login.php');
$r="INSERT INTO refuser VALUES ('$cin','$nm','$d','$t','$db','$fn','$st','$pf','$ml')";
$st = $cnx->exec($tab);
if($st){
    header("localisation:liste.php");
}else{
    echo"echec de suppression";  
}
?>