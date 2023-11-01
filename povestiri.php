<?php
        session_start();
        if(!isset($_SESSION['numeutilizator'])){
        header('location:newlogin.php');
  }
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Povestiri cu tâlc</title>
    <link rel="stylesheet" href="css/meniu.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/povestiristyle.css?v=<?php echo time(); ?>">
   
</head>
<body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>

<div class="box1">
    <p>Povestiri creștine</p>
	<?php
	$query="SELECT * FROM resurse WHERE id_categorie='2' AND id_format='2' ORDER BY titlu ASC";
			$result = mysqli_query($mysqli , $query);
		
						 if(mysqli_num_rows($result)>0)
			{
				while($row= mysqli_fetch_array($result))
				{   
                     echo '<span><br>'. $row["titlu"] . '</span>&nbsp;' ;
                   
                     ?>
		     
              <a href="<?php echo $row["sursa"];?>" id="buto">Citeste</a>
              <a href="preferate.php?id=<?php echo $row['id_resursa'] ?>&sursa=<?php echo $row['sursa'] ?>" class="btn-pref"><i class="fa fa-heart" aria-hidden="true"></i> Adaugă la preferate</a>
    
              <br>
           

<?php
				}
			}
?>			
		   </div>
	
</div>
</body>
</html>
 
 
 
 
 
 