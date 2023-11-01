<?php
session_start();
include "conectare.php";
if(!isset($_SESSION['id'])){
    
header('location:Home.php');
}
else{

 $u_id = $_SESSION['id']; 
 $r_id = $_GET['id'];
 $sursa = $_GET['sursa'];

 $sql_Check = "SELECT * FROM preferate WHERE r_id =" . $r_id . " AND u_id =" . $u_id;
 $result_check = mysqli_query($mysqli, $sql_Check);
 
 if (mysqli_num_rows($result_check) >= 1) { 
    echo 'product already exist in wishlist';
    header('location:resurse_preferate.php');
    
 } else {

    $insertWishlist = "INSERT INTO preferate (r_id, sursa, u_id) VALUES (?, ?, ?)";   
	if($stmt = mysqli_prepare($mysqli, $insertWishlist)){
         mysqli_stmt_bind_param($stmt, "isi", $param_r_id, $param_sursa, $param_u_id);

         $param_r_id = $r_id;
         $param_sursa = $sursa;
         $param_u_id = $u_id;

         if(mysqli_stmt_execute($stmt)) {
         	header('location:resurse_preferate.php');
         	exit();
         }

         else {
         	echo "Eroare";
         } 

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