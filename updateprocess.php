<?php
include "conectare.php";

if(isset($_GET['id'])){
$id = $_GET['id'];

$qry = mysqli_query($mysqli,"SELECT * FROM resurse WHERE id_resursa='$id'");
$data = mysqli_fetch_array($qry);

if(isset($_POST['submit'])) {

$titlu = $_POST['titlu'];
$autor = $_POST['autor'];
$continut = $_POST['continut'];
$id = $_GET['id'];
$upd = mysqli_query($mysqli, "UPDATE resurse set titlu='$titlu', autor='$autor', continut='$continut' WHERE id_resursa='$id' ");


if($upd)
    {
        mysqli_close($mysqli);
        header("location: updatepoezie.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($mysqli);
    }    	
}
}
?>

<html>
<head>
<title>Modifica poezie</title>
<link rel="stylesheet" href="css/adminstyle.css"></link>
</head>
<body>
<?php 
$qry = ("SELECT * FROM resurse WHERE id_resursa='$id'");
$result = mysqli_query($mysqli, $qry) or die(mysqli_error($result));
$row = mysqli_fetch_array($result)
?>

	<div class="box2">
<form name="actualizare" method="POST" action="">

<p>Titlu: <br></p>
<input type="text" name="titlu" class="txtField" value="<?php echo $row['titlu']; ?>" style="width: 250px; height: 50px;">
<br>
<p>Autor :<br></p>
<input type="text" name="autor" class="txtField" value="<?php echo $row['autor']; ?>" style="width: 250px; height: 50px;">
<br>
<p>Continut:<br></p>
<textarea name="continut" class="txtField" value="" rows="20" cols="50"><?php echo $row['continut']; ?></textarea>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</div>
</body>
</html>