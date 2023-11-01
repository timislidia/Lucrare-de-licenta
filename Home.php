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
  <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
   <script src="javascript/homescript.js"></script>


    </head>
    <body>
    <section id="meniu">
        <?php include "meniu.php"?>
    </section>

   
  <div class="box">

       <h1>Resurse pentru sufletul copilului tău</h1><br>
        
      <!-- Slideshow container -->
      <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade" id="poza1">
              <div class="text">Povestiri biblice pe înțelesul copiilor</div>
          </div>

          <div class="mySlides fade" id="poza2">
              <div class="text">Cântece creștine</div>
          </div>

          <div class="mySlides fade" id="poza3">
              <div class="text">Versuri creștine pentru copii</div>
          </div>

          <div class="mySlides fade" id="poza4">
              <div class="text">Povestiri cu tâlc</div>
          </div>

          <div class="mySlides fade" id="poza6">
              <div class="text">Întrebări din cultura Scripturilor</div>
          </div>
      </div>
      <br>

      <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


</body>
</html>