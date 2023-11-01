 <?php
session_start();?>

 
 <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cristale</title>
    <link rel="stylesheet" href="css/harfa.css?v=<?php echo time(); ?>">
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
    <script src="javascript/homescript.js"></script>
    <script src="javascript/harfa.js"></script>
	
</head>

<body>
	<section id="meniu">
	<?php
	include "conectare.php";
	include "meniu.php" ?>
</section>

	<div class="box1">
	<p> Harfa lui David</p>
	<div class="fbuttons">
		<a href="harfa.php" class="button">Cântece creștine</a>&nbsp;&nbsp;
		<a href="esong.php" class="button">Christian Songs</a>
	</div>
	<br/>
	<br/>
	<div class="buttons">
		<a href="harfa.php" class="button2">Speranta</a>&nbsp;&nbsp;
		<a href="eldad.php" class="button2">Eldad</a>&nbsp;&nbsp;
		<a href="cristale.php" class="button2">Cristale</a>&nbsp;&nbsp;
		<br><br></br>
	</div>

		<?php
		
		$resultSet = $mysqli->query("SELECT id_resursa FROM resurse WHERE autor='Cristale' ");
        $numRows = $resultSet->num_rows;
     
        $resultSet = $mysqli->query("SELECT * FROM resurse  WHERE autor='Cristale' ");

		while($row= mysqli_fetch_array($resultSet)) {
			echo '<span>' . $row["titlu"] . '</span>' ; $nbsp;
			 ?>
				 <button onclick="myFunction(<?php echo $row["id_resursa"]; ?>);" type="button">Ascultă</button> &nbsp;
			       <?php if(isset($_SESSION['numeutilizator'])) { ?>
             	   <a href="<?php echo $row['sursa']; ?>" id="download" download>Descarcă </a> 
             	   <a href="preferate.php?id=<?php echo $row['id_resursa'] ?>&sursa=<?php echo $row['sursa'] ?>" class="btn-pref"><i class="fa fa-heart" aria-hidden="true"></i></a> <?php } ?>
                   <audio controls id="myAudio<?php echo $row["id_resursa"]; ?>" style="display:none;"  controls controlsList="nodownload"><source src="<?php echo $row["sursa"];?>" type="audio/mpeg" ></audio>
     <?php 
			
				echo '<br><br>';
		}
	
		
     ?>
	 
	 
	 	<script>
function myFunction(id) {
  var x = document.getElementById("myAudio" + id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>	

             
 </div>
</body>
</html>

