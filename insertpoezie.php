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
<div class="box1">
    <h1>Adaugă o poezie nouă</h1>
 <div class="container">
    <form action="insert_poezie.php" method="POST">
    <p> Titlu:</p></br>
    <input type="text" name="titlu" value="" style="width: 250px; height: 50px;"/><br/></br>
    <p>Autor:</p></br>
    <input type="text" name="autor" value=""  style="width: 250px; height: 50px;"/><br/></br>
    <p>Conținut:</p></br>
    <textarea name="continut" value="" rows="10" cols="50"/></textarea><br/>
    <input type="submit" name="submit" value="Adaugă"/>&nbsp;&nbsp;&nbsp;
    <a href="admin.php" class="button">Pagina de start</a>
    </div> 
    </div></form></body></html>
    