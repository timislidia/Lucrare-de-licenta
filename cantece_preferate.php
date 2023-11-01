<?php
session_start();
include "conectare.php";
if(!isset($_SESSION['id'])){
    
header('location:Home.php');
}else{

 $sql = "SELECT *FROM preferate, resurse";
 $result = mysqli_query($mysqli , $sql) or die ("Bad Query: $sql");
 $row = mysqli_fetch_array($result);
 $u_id = $_SESSION['id']; 
 $r_id = $_GET['id'];
 $r_sursa = $row['sursa'];

 $sql_Check = "SELECT * FROM preferate r_id = $r_id, u_id = $u_id, sursa=$r_sursa ";
 $result_check = mysqli_query($mysqli, $sql_Check);
 echo $result_check;

 if (mysqli_num_rows($result_check) == 1) { 
    echo 'product already exist in wishlist';
    header('location:afisare_cantece_preferate.php');
    
 }else{

    $insertWishlist = "INSERT INTO preferate (r_id, u_id, sursa) VALUES ('$r_id', '$u_id', '$r_sursa')";   
	if(mysqli_query($mysqli, $insertWishlist)){
        header('location:afisare_cantece_preferate.php');

    }

 }

}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

console_log($result_check);

?>