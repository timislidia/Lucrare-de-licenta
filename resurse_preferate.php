<?php
session_start();?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resurse preferate</title>
	<link rel="stylesheet" href="css/homestyle.css"v=<?php echo time(); ?>/>
	<link rel="stylesheet" href="css/quizstyle.css"v=<?php echo time(); ?> />

    </head>
    <body>
<section id="meniu">
    <?php 
	include "conectare.php";
	include "meniu.php"?>
</section>
	
<div class="box1">
    <h1>Lista mea cu resurse preferate</h1>

    <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <br>
                <tbody>

               <?php
                $u_id = $_SESSION['id']; 
  
                $sql = "SELECT * FROM preferate JOIN resurse on resurse.id_resursa=preferate.r_id  JOIN categorii on resurse.id_categorie=categorii.id_categorie WHERE u_id= $u_id ";

                $result = mysqli_query($mysqli, $sql);
                     
                if (mysqli_num_rows($result) > 0) { ?>


                           <table class="cart-table account-table table table-bordered bg-white text-dark">
                <thead >
                    <tr> 
                        <td>Titlu</td>
                        <td>Categorie</td>
                        <td>Data</td>
                        
                    </tr>
                </thead>
                  <?php  while($row = mysqli_fetch_assoc($result)) { ?>

                 
         
                    <tr>
                        <td> <span class="col2">
                        <?php if (!empty($row["sursa"])){ ?>
                            <a href="<?php echo $row["sursa"];?>" id="buto"><?php echo $row["titlu"] ?></a> 
                        <?php } else { ?>

                         <a href="poezie.php?id=<?php echo $row["id_resursa"] ?>" id="titlu"><?php echo $row["titlu"]; } ?></a> 
                        </td></span>
                        <td> <span class="col">
                        <?php echo $row["denumire"] ?>
                        </td></span>
                        <td><span class="col">
                        <?php echo date('M j g:i A', strtotime($row["timestamp"]));  ?>     
                        </td></span>
                        <td>
                        <td>
                            <a href="elimina_preferate.php?r_id=<?php echo $row["id_resursa"] ?>&u_id=<?php echo $_SESSION['id'] ?>" class="buton">Delete</a> 
                             
                        </td>
                    </tr>
                 
            
            <?php
                }
               } elseif (mysqli_num_rows($result) == 0)  {
                 echo  "<span>Nu ai resurse preferate!</span>";
               }
             
             
             ?>




                
                </tbody>
            </table>        

         
 

