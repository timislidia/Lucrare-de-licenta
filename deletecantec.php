<?php
include "conectare.php";
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Șterge cântec</title>
    <link rel="stylesheet" href="css/adminstyle.css?">
    
</head>

<body>
<div class="box1">
    <h1>Șterge cântec</h1>
 <div class="container">
 	  <?php 
	     include "conectare.php";
 $rpp = 13;

    isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
        if($page > 1) {
            $start = ($page * $rpp) - $rpp; }
        else {
            $start = 0; }

		$resultSet = $mysqli->query("SELECT id_resursa FROM resurse WHERE id_categorie='1' AND id_format='1' ");
        $numRows = $resultSet->num_rows;
        $totalPages = $numRows / $rpp + 1;
        $resultSet = $mysqli->query("SELECT * FROM resurse WHERE id_categorie='1' AND id_format='1' LIMIT $start, $rpp");

             while($row= mysqli_fetch_array($resultSet)) {
                 echo '<span>' . $row["titlu"] . '</span>' ; $nbsp;
                 echo '<br>'; ?>
		     
                 <button onclick="myFunction(<?php echo $row["id_resursa"]; ?>);" class='buton' type="button">Ascultă</button> &nbsp;
                   <audio controls id="myAudio<?php echo $row["id_resursa"]; ?>" style="display:none;" ><source src="<?php echo $row["sursa"];?>" type="audio/mpeg" ></audio>
           <?php   echo "<a href='Stergepoezie.php?id={$row['id_resursa']}'class='buton'</a>Șterge</a><br>";?>

     <?php 
			echo '<br>';
			
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

     
<div class="paginare">

          <?php
          for($x = 1; $x <= $totalPages ; $x++) {
            echo "<a  href ='?page=$x'> $x </a>";
          }
                  ?>
  
               </div>
	   
	  </div>
    <a href="admin.php" class="button">Pagina de start</a>
  </div>
</body>
</html>
