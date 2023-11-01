<?php
session_start(); 

$link = mysqli_connect("localhost", "root", "", "licentanou2");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$titlu = mysqli_real_escape_string($link, $_REQUEST['titlu']);
$autor = mysqli_real_escape_string($link, $_REQUEST['autor']);
$continut = mysqli_real_escape_string($link, $_REQUEST['continut']);


$sql = ("INSERT INTO resurse (titlu, autor, continut, id_categorie, id_format) VALUES ('$titlu', '$autor', '$continut', '3', '2')");
if(mysqli_query($link, $sql)){
    echo "Poezie adăugată!";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

?>

