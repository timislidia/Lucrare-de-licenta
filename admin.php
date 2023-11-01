<?php
        session_start();
       
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="css/adminstyle.css?">
    
</head>

<body>
<section id="meniu">
    <?php 
    include "conectare.php"; ?>

</section>

<div class="box1">
    <h1>Bun venit în pagina de administrare!</h1>
    <div class="butoane">
    <a href="insert.php" class="button">Adăugare resurse</a>
    <a href="delete.php" class="button">Ștergere resurse</a>
    <a href="update.php" class="button">Modificare resurse</a>
    </div>
     

<a href="newlogin.php" id="logout">Logout</a>
</div>
</body>
</html>
