<?php
session_start();
include "conectare.php";
if(!isset($_SESSION['id'])){
    
header('location:Home.php');
}else{
 $r_id = $_GET['r_id']; 
 $u_id = $_GET['u_id'];
 

    $delWishlist = "DELETE FROM preferate WHERE r_id='$r_id' AND u_id='$u_id'";   
	if(mysqli_query($mysqli, $delWishlist)){
        header('location:resurse_preferate.php');

    }
 
}

?>