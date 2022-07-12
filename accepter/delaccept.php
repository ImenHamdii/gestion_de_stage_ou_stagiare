<?php session_start();  
$cn=$_GET['cins'];
require("../login.php");
$t="SELECT * FROM accepter WHERE cin LIKE '%$cn%'";
    $statment=$cnx->query($t);
    while($s=$statment->fetch()){
$c=$s["cin"];
$nm=$s["nom"];
$d=$s["department"];
$t=$s["telephone"];
$db=$s["debut"];
$fn=$s["fin"];
$st=$s["stage"];
$pf=$s["pdf"];  
$ml=$s['mail'];
$tab="INSERT INTO refuser VALUES ('$c','$nm','$d','$t','$db','$fn','$st','$pf','$ml')";
   $stab = $cnx->exec($tab);
if($stab){
 $dl = "DELETE FROM accepter WHERE cin = $cn";
    $st = $cnx->exec($dl);
if($st){
    header('Location: accepter.php');
}else{
    echo"echec de suppression";  
}
}else{echo "echec de refuser";
    echo'<br><a href="accepter.php"><Button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
  </svg>retour a list d\'acceptation</Button></a>';}}
?>