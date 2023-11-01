<?php
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
	<link rel="stylesheet" href="css/homestyle.css"v=<?php echo time(); ?>" />
	<link rel="stylesheet" href="css/quizstyle.css"v=<?php echo time(); ?>" />
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
   


    </head>
    <body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>
	
<div class="box1">
  <p>Quiz </p>
 

<center>
<br><br>
<a href="quiz1.php" class="myButton"> QUIZ 1</a>
&nbsp;&nbsp;
<a href="quiz2.php" class="myButton"> QUIZ 2</a>

<center>
</div>
</body>
</html>
