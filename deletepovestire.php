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
<a href="deletepovestireaudio.php" class="button2">Șterge povestire audio</a>

 <div class="container">
 	  <?php 
	     include "conectare.php";



$query="SELECT * FROM resurse WHERE id_categorie='2' AND id_format='2'  ORDER BY titlu ASC";
			$result = mysqli_query($mysqli , $query);
		
						 if(mysqli_num_rows($result)>0)
			{
				while($row= mysqli_fetch_array($result))
				{   
                     echo '<span><br>'. $row["titlu"] . '</span>&nbsp;' ; ?>
		     
              <a href="<?php echo $row["sursa"];?>" id="buto">Citeste</a>
           <?php   echo "<a href='Stergepoezie.php?id={$row['id_resursa']}' class='buton'</a>Șterge</a>";?>

              

     <?php 
			echo '<br>';
			
		}
	      
	       }
	   
	   ?>

	   
	  </div>
    <a href="admin.php" class="button">Pagina de start</a>
</div>
</div>
</body>
</html>