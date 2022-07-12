<html>
<head>
<link rel="stylesheet" href="form.css"  type="text/css" />
</head>
<body>
 <form action="" method="POST" class="form"><div class="container">
	 <center><h1> Demande De Stage</h1></center>
	<br><table>
	 <tr><td><label for="nom">nom et prenom: </label><input name="nom" type="text" require></td>
	    <td><label for="cin">num CIN: </label><input name="numcin" type="number" require/></td></tr>
	 <tr><td><label for="eml">e-mail:  </label> <input name="mail" type="mail" require/></td>
	    <td><label for="tlf">num telephone:</label> <input name="tel" type="number" require/></tr>
	 <tr><td colspan='2'><label for="dp">department:</label> <input name="dep" type="text"require/></td></tr>
	 <tr><td><label for="stg">stage de:  </label><input name="debut" type="date" require/></td>
	    <td><label>au: </label><input name="fin" type="date" require/></tr>
	 <tr><td><label for="type">type de stage :</label>
 <select name="stage">
		<option value='initiation'>initiation</option>
		<option value='perfectionnement'>perfectionnement</option>
		<option value='pfe'>projet fin d'etude</option>
</select></td>
<td> <label for="dem">demande de stage : </label><input name="pdf" type="file" require/></td></tr>
<table></div>
<br>
<center><button name="ok">envoyer</button>
<?php
include("../login.php");
try{
	if (empty($_POST['nom'])||empty($_POST['numcin'])||empty($_POST['tel'])||empty($_POST['dep'])||empty($_POST['debut'])||empty($_POST['fin'])
	||empty($_POST['pdf'])||empty($_POST['stage'])){
		echo"<span>Remplir votre donnees</span>";
		
	}else{
		$ncin = $_POST['numcin'];
		$u= " SELECT * FROM liste WHERE cin LIKE '%$ncin%'";
   $stm=$cnx->query($u);
   $s=$stm->fetch();
  $su=$s['cin'];   
  $snm=$s['nom'];

  if($su==$ncin){echo("<span>votre demande <b>$snm </b>est deja envoyer!! ");
			echo"<a href='rechstage.php?cins=".$s['cin']."'> voir le demande </span></a>";
	}else{
		$nom = $_POST['nom'];	
		$tel = $_POST['tel'];
		$dep= $_POST['dep'];
		$db=$_POST['debut'];
		$fn=$_POST['fin'];
		$pf=$_POST['pdf'];
		$st=$_POST['stage'];
		$ml=$_POST['mail'];
			$p = "INSERT INTO liste VALUES ('$ncin','$nom','$dep','$tel','$db','$fn','$st','$pf','$ml')";
	 	    $st = $cnx->exec($p);
			 if($st){
				 echo " <span>votre demande <b> $nom </b> ajouter avec succes </span> ";
			 }
				else{  
		echo "<span> !!!!!!!erreur il y a un probleme!!!!!!!!</span> ";
		}
	}}
				}
		catch(PDOStatment $e)
		{ echo "Connection failed: ".$e->getMessage(); }
 ?></form>
 </body>
 </html>
 