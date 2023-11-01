<?php
include "conectare.php";
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1"/>
    <title>Inserare</title>
    <link rel="stylesheet" href="css/adminstyle.css"></link>
</head>
<body>

<div class="box1">
    <h1>Bun venit în pagina de administrare!</h1>
    <div class="butoane">
    <a href="insert.php" class="button">Adăugare resurse</a>
    <a href="delete.php" class="button">Ștergere resurse</a>
    <a href="updatepoezie.php" class="button">Modificare resurse</a>
    </div>

