<?php
session_start();
 include "conectare.php";?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cautare</title>
    <link rel="stylesheet" href="css/search.css?v=<?php echo time(); ?>">
</head>

<body>
<section id="meniu">
	<?php
	include "meniu.php" ?>
</section>

<div class="box1">

<?php
if(isset($_POST['submit-search']))	 {
	$search = mysqli_real_escape_string($mysqli, $_POST['search']);
	$sql = "SELECT * FROM resurse WHERE titlu LIKE '%$search%' ";
	$result = mysqli_query($mysqli, $sql);
	$queryResult = mysqli_num_rows($result);



	if($queryResult > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
             
            
             
                if($row["id_format"] == '1'){

                echo '<span id="aud"><br>' . $row["titlu"] . '</span>' ; $nbsp; ?>
                	<button onclick="myFunction(<?php echo $row["id_resursa"]; ?>);" type="button">Ascultă</button> &nbsp;
             <audio controls id="myAudio<?php echo $row["id_resursa"]; ?>" style="display:none;" ><source src="<?php echo $row["sursa"];?>" type="audio/mpeg" ></audio> 
             	<?php
                }

                elseif ($row["id_format"] == '2' && $row["id_categorie"]=='2') { 
                  echo '<span id="pov"><br>' . $row["titlu"] . '</span>' ; $nbsp; ?>
                  <a href="<?php echo $row['sursa'];?>" id="buto">Citeste</a>";
                  <?php
                 }
  
                 else {
                 echo '<h1><br>' . $row["titlu"] . '</h1>' ; $nbsp; 
                 echo '<h2><br>' . $row["autor"] . '</h2><br>' ; $nbsp; 
                 echo '<p><br>' . nl2br($row['continut']) . '</p>' ; $nbsp; 
             }
	}
}

if($queryResult == 0){
    echo "Niciun rezultat gasit!";
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

