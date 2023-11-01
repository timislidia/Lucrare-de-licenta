<?php
include "conectare.php";
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Modificare poezie</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/adminstyle.css"></link>
 </head>
<body>
	<div class="box2">
<?php
$result = mysqli_query($mysqli,"SELECT * FROM resurse WHERE id_categorie='3'");
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  
			<?php
			
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	 
		<td><span><?php echo $row["titlu"]; ?></span></td>
		<td><span id="autor"><?php echo $row["autor"]; ?></span></td>
		<td><span id="upd"><a href="updateprocess.php?id=<?php echo $row["id_resursa"]; ?>">Update</a></span></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
    <a href="admin.php" class="button">Pagina de start</a>

</div>
 </body>
</html>