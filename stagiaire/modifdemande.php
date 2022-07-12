<html>
<head>
<link rel="stylesheet" href="tab.css"  type="text/css" />
</head>
<body>

<?php
$cn=$_GET['cns'];
require("../login.php");
$t="SELECT * FROM liste WHERE cin LIKE '%$cn%'";
    $statment=$cnx->query($t);
    $s=$statment->fetch();
    if($s){
$c=$s["cin"];
$nm=$s["nom"];
$d=$s["department"];
$t=$s["telephone"];
$db=$s["debut"];
$fn=$s["fin"];
$st=$s["stage"];
$pf=$s["pdf"];  
$ml=$s['mail'];?>
<form action="" method="POST">
<center>
<h1> modifier le demande </h1>
<input name="cns" type="hidden" value="<?php echo $cn;?>" />
 <table border='2'>
 <tr><td><b>Cin: </td><td><input name="nn" type="text" value="<?php echo $cn;?>" disabled></td></tr>
 <tr><td><b>nom et prenom: </td><td><input name="nom" type="text" value="<?php echo $nm;?>"></td></tr>
 <tr><td><b>num telephone: </td><td><input name="tel" type="number" value="<?php echo $t;?>"/></td></tr>
 <tr><td><b>e-mail :</td><td><input name="mail" type="text" value="<?php echo $ml;?>" /></td></tr>
 <tr><td><b>department: </td><td><input name="dep" type="text" value="<?php echo $d;?>"></td></tr>
 <tr><td><b>stage de: </td><td>  <input name="debut" type="date" value="<?php echo $db;?>">
 <br>au <input name="fin" type="date" value="<?php echo $fn;?>"></td></tr>
 <tr><td><b>demande de stage:</td><td><input name="pdf" type="file" value="<?php echo $st;?>"require/></td></tr>
 <tr><td><b>type de stage :
 </td><td><select name="stage" value="<?php echo $st;?>">
    <option value='<?php echo $st;?>'><?php echo $st;?></option>
		<option value='initiation'>initiation</option>
		<option value='perfectionnement'>perfectionnement</option>
		<option value='pfe'>projet fin d'etude</option>
</select></td></tr>
</table><br>
<button> changer</button>
<?php
if(isset($_POST["nom"])){
$nom=$_POST["nom"];
$dep=$_POST["dep"];
$tl=$_POST["tel"];
$sdb=$_POST["debut"];
$sfn=$_POST["fin"];
$stg=$_POST["stage"];
$pdf=$_POST["pdf"];  
$mil=$_POST["mail"];
$p = "UPDATE liste SET nom='$nom',department='$dep',
        telephone='$tl',debut='$sdb',fin='$sfn',stage='$stg',pdf='$pdf',mail='$mil'
         WHERE cin=$cn";
         $st = $cnx->prepare($p); 
         $st->execute();
   if($st){
    echo'modifier avec succes 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
      </svg>';
      header("Location: rechstage.php?cins=$c");} 
    else { echo ' <h3 style="color:red"><br> erreur il y a un probleme
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-dizzy" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg> </h3>';}}}
    ?>
    
   
   </table></center>

</body>