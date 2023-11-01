<?php
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Harfa</title>
    <link rel="stylesheet" href="css/harfa.css?v=<?php echo time();?>">
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
    <script src="javascript/homescript.js"></script>
    <script src="javascript/harfa.js"></script>
</head>
<body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>

<div class="box1">
    <p> Harfa lui David</p>
    <div class="fbuttons">
    <a href="harfa.php" class="button">Cântece creștine</a>&nbsp;&nbsp;
    <a href="esong.php" class="button">Christian Song</a>
     
        <br>
        <div class="box2">
        <h3>Când cântă un creștin, pe pământ se aude o voce, dar în cer se aude o inimă.</h3>
        </div>
        
        <br><br></br>
    </div>
    
