<?php
include "conectare.php";
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Șterge poezie</title>
    <link rel="stylesheet" href="css/adminstyle.css?">
    
</head>

<body>
<div class="box1">
    <h1>Șterge poezie</h1>
 <div class="container">
 	  <?php 
	     include "conectare.php";

		$rpp = 10;

		isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
        if($page > 1) {
            $start = ($page * $rpp) - $rpp;
		}
        else {
            $start = 0;
		}

		$resultSet = $mysqli->query("SELECT id_resursa FROM resurse WHERE id_categorie='3' ");
        $numRows = $resultSet->num_rows;
        $totalPages = $numRows / $rpp;
        $resultSet = $mysqli->query("SELECT * FROM resurse WHERE id_categorie='3' LIMIT $start, $rpp  ");

		while($row= mysqli_fetch_array($resultSet)) {
		echo"<a id='link' href='poezieadmin.php?id={$row['id_resursa']}'>{$row['titlu']}</a>";
			echo "<a href='Stergepoezie.php?id={$row['id_resursa']}' class='buton' </a>Șterge</a><br>";
				
    
			echo '<br>';
			
		}
	      
	       
	   ?>
	   
<div class="paginare">

			  	<?php
				  for($x = 1; $x <= $totalPages + 1 ; $x++) {
					  echo "<a  href ='?page=$x'> $x </a>";
				  }
                  ?>
	
               </div>
</div>
<a href="admin.php" class="button">Pagina de start</a>
</div>
</body>
</html>
