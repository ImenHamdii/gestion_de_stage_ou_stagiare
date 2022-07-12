
<?php session_start();
$cn=$_GET['cins'];
require("../login.php");
try {
    $t="SELECT nom,mail FROM liste ORDER BY cin";
    $stm=$cnx->query($t);
    $ts=$stm->fetch();
    $nom=$ts['nom'];
    $ml=$ts['mail']

?>
<body>
<form action="mailto:<?php $ml?>"
method="POST"
enctype="multipart/form-data"
name="EmailForm">
send e-mail to : <?php echo $nom;?> <br>
leur e-mail: <?php echo $ml;?><br>
Message:<br> 
    <textarea name="Contact-Message" rows="6″ cols="20″>
    </textarea><br><br> 
    <button type="submit" value="Submit">Send</button>


<?php  }
catch(PDOStatment $e)
{ echo "Connection failed: " . $e->getMessage(); }?>

