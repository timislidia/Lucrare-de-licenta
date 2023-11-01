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
    <h1>Adaugă o povestire nouă</h1>
 <div class="container">
    <form action="insert_povestire.php" method="POST" enctype="multipart/form-data">
    <p> Titlu:</p></br>
    <input type="text" name="titlu" value="" style="width: 250px; height: 50px;"/><br/></br>
    <p>Sursa:</p></br>
    <input type="file" name="file" value=""/><br/></br>
    <input type="submit" name="submit" value="Adaugă"/>&nbsp;&nbsp;&nbsp;
    <a href="admin.php" class="button">Pagina de start</a>
    </div> 
    </div></form></body></html>
    