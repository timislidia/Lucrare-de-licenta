<?php
include_once 'conectare.php';
     if(!isset($_SESSION)){
    session_start();
    if(!(isset($_SESSION['numeutilizator'])))
    {
        header("location:newlogin.php");
    }
    else
    {
        $numeutilizator = $_SESSION['numeutilizator'];
        include_once 'conectare.php';
	 }}
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1"/>
    <title>Poezie</title>
	<link rel="stylesheet" href="css/meniu.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/poeziistyle.css"></link>
 
</head>
<body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>

    <div class="box1">

    <?php

    if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['id']);
    $sql = "SELECT * FROM resurse WHERE id_categorie ='3' AND id_resursa='$id' ";
    $result = mysqli_query($mysqli , $sql) or die ("Bad Query: $sql");
    $row = mysqli_fetch_array($result);
    }
    ?>

        <div class="content">
            <h1><?php echo $row['titlu'] ?></h1><br>
            <h3><?php echo $row['autor'] ?></h3><br>
           
            <p> <?php echo nl2br($row['continut']) ?></p>
        </div>
       
<div class="col-md-4">
    <a href="preferate.php?id=<?php echo $_GET['id'] ?>" class="btn-pref"><i class="fa fa-heart" aria-hidden="true"></i> Adaugă la preferate</a>
    </div>

    </div>

</body>
</html>