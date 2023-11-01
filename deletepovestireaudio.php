<?php
include "conectare.php";
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Șterge povestire</title>
    <link rel="stylesheet" href="css/adminstyle.css?">
    
</head>

<body>
<div class="box1">
    <h1>Șterge povestire</h1>
<a href="deletepovestire.php" class="button2">Șterge povestire pdf</a>

 <div class="container">
 	  <?php 
	     include "conectare.php";

$query="SELECT * FROM resurse WHERE id_categorie='2' AND id_format='1'  ORDER BY titlu ASC";
			$result = mysqli_query($mysqli , $query);
		
						 if(mysqli_num_rows($result)>0)
			{
				while($row= mysqli_fetch_array($result))
				{   
                     echo '<span><br>'. $row["titlu"] . '</span>&nbsp;' ; ?>
		     
               <button onclick="myFunction(<?php echo $row["id_resursa"]; ?>);" class='buton' type="button">Ascultă</button> &nbsp;
                   <audio controls id="myAudio<?php echo $row["id_resursa"]; ?>" style="display:none;" ><source src="<?php echo $row["sursa"];?>" type="audio/mpeg" ></audio>
           <?php   echo "<a href='Stergepoezie.php?id={$row['id_resursa']}' class='buton'</a>Șterge</a>";?>

              

     <?php 
			echo '<br>';
			
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
 <a href="admin.php" class="button">Pagina de start</a>
 </div>
</body>
</html>