<?php 
include_once 'conectare.php';
 ?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible">
    <title>Meniu</title>
    <link rel="stylesheet" href="css/meniu.css?v=<?php echo time(); ?>">
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
</head>
<body>
		  <div class="topnav">
		    <label> Resurse</label>

<div class="search-container">
    <form action="searchbar.php" method="POST">
      <input type="text" placeholder="Caută o resursă.." name="search">
      <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
    </form>
  </div>
            <div class="butoane">
			 <?php 
           if ((isset($_SESSION['numeutilizator'])) && ($_SESSION["numeutilizator"]=="admin")) {
              echo  "<a href='admin.php'>" .$_SESSION['numeutilizator'] . "</a>&nbsp" ; 
             } elseif (isset($_SESSION['numeutilizator'])) {
               echo  "<a href='Home.php'>" .$_SESSION['numeutilizator'] . "</a>&nbsp"  ; 
                echo  "<a href='resurse_preferate.php'>Preferințe</a>&nbsp"  ; 
                  echo "<a href='contactpage.php'>Contact</a>&nbsp";
               } else {
              echo "<a href='home.php'>Home</a>&nbsp&nbsp";}
            
               
               if(isset($_SESSION['numeutilizator'])) {
              echo  "<a href='logout.php'>Logout</a>&nbsp"  ; }
              else {
              echo "<a href='newlogin.php'>Login</a>&nbsp";}
             
                ?>
            </div>

			
        </div>

    <div class="sidebar">
        <ul>
            <li>
                <a href="#">
                    Întâmplări din Biblie &nbsp
                    <span class="fas fa-caret-down"></span>
                </a>
                <ul>
                    <li><a href="vt.php">Vechiul Testament</a></li>
                    <li><a href="nt.php">Noul Testament</a></li>
                </ul>
            </li>
            <li><a href="cantece.php">Harfa lui David</a></li>
            <li><a href="poezii.php">Poezii</a></li>
            <li><a href="povestiri.php">Povestiri creștine</a></li>
            <li><a href="quiz.php">Teste de verificare</a></li>
          
        </ul>
    </div>

</body>
</html>


