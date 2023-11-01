<?php
//conectare la baza de date database
include "conectare.php";

$id = $_GET['id'];

if(isset($id)) {
    $sql = "DELETE FROM resurse WHERE id_resursa ='$id' ";
    $result=mysqli_query($mysqli, $sql) or die("error");
    if($result)
       echo"Înregistrarea a fost ștearsă!";
}
else {
    echo 'GET NOT SET';
}
?>