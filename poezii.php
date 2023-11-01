<?php
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Poezii</title>
	<link rel="stylesheet" type="text/css" href="css/meniu.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="css/poeziistyle.css?v=<?php echo time(); ?>">
    
</head>
<body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>

<div class="box1">
    <h1>Poezii creștine</h1><br></br>
	<br>

   <?php
		$rpp = 10;

		isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
        if($page > 1) {
            $start = ($page * $rpp) - $rpp;
		}
        else {
            $start = 0;
		}

		$resultSet = $mysqli->query("SELECT id_resursa FROM resurse WHERE id_categorie='3' AND id_format='2' ");
        $numRows = $resultSet->num_rows;
        $totalPages = $numRows / $rpp;
        $resultSet = $mysqli->query("SELECT * FROM resurse WHERE id_categorie='3' AND id_format='2' LIMIT $start, $rpp  ");

		while($row= mysqli_fetch_array($resultSet)) {
		echo"<a id='link' href='poezie.php?id={$row['id_resursa']}'>{$row['titlu']}</a><br></n";
			echo '<br>'; ?>
				
     <?php 
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
</body>
</html>