<?php include 'sendmail.php';

    include_once 'conectare.php';
    if(!isset($_SESSION)){
    session_start();
}
    if(!(isset($_SESSION['numeutilizator'])))
    {
        header("location:newlogin.php");
    }
    else
    {
        $numeutilizator = $_SESSION['numeutilizator'];
        include_once 'conectare.php';
    }
?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
     <title>Contact</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" contenteditable="ie=edge">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
     <link rel="stylesheet" href="meniu.css?v=<?php echo time(); ?>"/>
     <link rel="stylesheet" href="css/contactstyle.css?v=<?php echo time(); ?>"/>
     
      <?php 
	  include "meniu.php"; 
      ?>
    </head>

<body>
    <?php echo $alert; ?> 

<div class="box1">
    <h1>Trimite-ne un mesaj!</h1>
    <br></br>

      <div class="container">
        <form action="" method="post">
    <label for="lname">Nume și prenume</label><br>
    <input type="text" id="name" name="name" placeholder="Numele tău complet"><br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" placeholder="Adresa ta de email"><br>

 
    <label for="subject">Subiect</label><br>
    <textarea id="message" name="message" placeholder="Mesajul tău.." style="height:120px"></textarea><br>

    <input type="submit" value="Trimite" name="submit">

  </form>
          
           <div id="contact"></div>
</div>
         
   

</div>


<script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
</script>
         
</body>
</html>