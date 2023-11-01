
 <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adaugă cântec</title>
    <link rel="stylesheet" href="css/adminstyle.css?">
    
</head>

<body>
<div class="box1">
    <h1>Adaugă un cântec nou</h1>
 <div class="container">
    <form action="insertcantec2.php" method="POST" enctype="multipart/form-data">
    <p> Titlu:</p></br>
    <input type="text" name="titlu" value="" style="width: 250px; height: 50px;"/><br/></br>
    <p>Autor:</p></br>
    <input type="text" name="autor" value="" style="width: 250px; height: 50px;"/><br/></br>
    <p>Sursa:</p></br>
    <input type="file" name="file" value="" style="width: 250px; height: 50px;"/><br/></br>
    <input type="submit" name="submit" value="Adaugă"/>&nbsp;&nbsp;&nbsp;
    <a href="admin.php" class="button">Pagina de start</a>
    </div> 
    </div></form></body></html>
    



