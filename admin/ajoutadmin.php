<html>
<head>
<link rel="stylesheet" href="ajout.css"  type="text/css" />
  </head>

<body>

<form action="" method="POST">
  <center>
<h1> Creation de compte </h1>
<table>
  <tr><td><label> nom et prenom:</label><input name="nom" type="text"require></td>
     <td><label> cin: </label><input name="numcin" type="number" /></td>
<tr> <td> <label>telephone :</label><input name="tel" type="number"require></td>
    <td><label> age :</label><input name="age" type="number"require></td>
<tr> <td colspan='2'><label> mot de passe :</label> <input name="pwd" type="password" require></td>
<tr><td colspan='2'><center>
<button name="log">Ajouter </button></center></td></tr>
</table></center>

<?php

include("../login.php");
try{
  if(isset($_POST['numcin'])){
    $numcin = $_POST['numcin'];
    $pwd = $_POST['pwd'];
    $u= " SELECT * FROM admin WHERE cin LIKE '%$numcin%'";
    $stm=$cnx->query($u);
    $s=$stm->fetch();
    $su=$s['cin'];
 if ($numcin == $su){
  echo "<span>verifier de votre numero de cin </span>";
  }else if($numcin && $pwd){
      $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $age = $_POST['age'];
    $numcin = $_POST['numcin'];
    $pwd = $_POST['pwd'];
    $p = "INSERT INTO admin VALUES ('$nom','$numcin','$tel','$age','$pwd')";
    $st = $cnx->exec($p);
    if($st){
      echo "<span>ajouter avec succes bienvenue dans notre équipe $nom </span>";
      echo "<span> <a href='../connect.php'>"; ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
      <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
      <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
    </svg>connecte</span></a><?php
    }else{echo"<span>desole il y a un probleme</span>";}   
    }
}else{echo"<span>Remplir votre donnees</span>";}
}catch(PDOException $e)
{ echo "Connection failed: ".$e->getMessage(); }
?>
