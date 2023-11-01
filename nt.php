<?php
session_start();?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1"/>
    <title>Povestiri audio Noul Testament</title>
	<link rel="stylesheet" href="css/meniu.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/audiostyle.css?v=<?php echo time(); ?>" />
</head>
<body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>


<div class="box1">
<p> Povestiri audio din Noul Testament</p>
<br>
<?php
 $query="SELECT * FROM resurse WHERE autor='Vechiul Testament' ORDER BY titlu ASC";
			$result = mysqli_query($mysqli , $query);
		
						 if(mysqli_num_rows($result)>0)
			{
				while($row= mysqli_fetch_array($result))
				{   
                     echo '<span><br>'. $row["titlu"] . '</span><br>' ; ?>
					   
<button onclick="myFunction(<?php echo $row["id_resursa"]; ?>);" type="button">Asculta</button> &nbsp;
<?php if(isset($_SESSION['numeutilizator'])) { ?>
<a href="<?php echo $row['sursa']; ?>" id="download" download>Descarcă </a> <?php } ?>
<audio controls id="myAudio<?php echo $row["id_resursa"]; ?>" style="display:none;" controls controlsList="nodownload" ><source src="<?php echo $row["sursa"];?>" type="audio/mpeg" ></audio>


					 
<?php
				}
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