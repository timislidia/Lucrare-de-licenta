<?php
session_start();
 if(!isset($_SESSION['numeutilizator'])){
        header('location:newlogin.php');
  }?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz 2</title>
	<link rel="stylesheet" href="css/homestyle.css"v=<?php echo time(); ?>" />
	<link rel="stylesheet" href="css/quizstyle.css"v=<?php echo time(); ?>" />
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
  


    </head>
    <body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>
	
<div class="box1">
  <p>Quiz 1</p>
  <?php 
  if (isset($_POST['click']) || isset($_GET['start'])) {
				@$_SESSION['clicks'] += 1 ;
				$c = $_SESSION['clicks'];
				if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
																	
			    $fetchqry2 = "UPDATE `intrebari` SET `userans`='$userselected' WHERE `numar_intrebare`=$c-1"; 
				$result2 = mysqli_query($mysqli,$fetchqry2);
			    }
			  														
			    } else {
				$_SESSION['clicks'] = 0;
				}
																	
			    //echo($_SESSION['clicks']);
?>

<center>
<div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="startquiz" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></form></div>
<form action="" method="post">  				</center>
<table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `intrebari` where id='$c' && id_categorie='1' "; 
				$result=mysqli_query($mysqli,$fetchqry);
				$num=mysqli_num_rows($result);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
<tr><td><h3><br><?php echo @$row['numar_intrebare'].'.'; echo @$row['intrebare'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 11){ ?>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['opt1'];?>">&nbsp;<?php echo $row['opt1']; ?><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['opt2'];?>">&nbsp;<?php echo $row['opt2'];?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['opt3'];?>">&nbsp;<?php echo $row['opt3']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['opt4'];?>">&nbsp;<?php echo $row['opt4']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  
																	?> 
  <form>
 <?php if($_SESSION['clicks']>10){ 
 	$corecte=0;
 	
	$qry3 = "SELECT `raspuns`, `userans` FROM `intrebari`;";
	$result3 = mysqli_query($mysqli,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['raspuns']==$row3['userans']){
		  $corecte += 1 ;
	 }
}
 
 ?> 
 
  <center>
  <h2>Felicitări, <?php echo $_SESSION['numeutilizator'] ;?> </h2> <br>
 <span>Ai răspuns corect la
 <?php echo $corecte;?> <span>întrebări</span> <br><br>
 <a href="quiz.php" class="button">Pagina pricipală</a>
 </span><br>
</center>
  

<?php } ?>

 <script type="text/javascript">
    function radioValidation(){
		 var useransj = document.getElementById('rd').value;
        document.cookie = "username = " + userans;
		alert(useransj);
		var uans = document.getElementsByName('userans');
		var tok;
		for(var i = 0; i < uans.length; i++){
			if(uans[i].checked){
				tok = uans[i].value;
				alert(tok);
			}
		}
    }
</script> 
</center>
		
	
</body>
</html>