<?php
session_start();

$nume = "";
$prenume = "";
$numeutilizator = "";
$parola = "";
$nr_telefon = "";
$email = "";
$gen = "";

$servername = "localhost";
$username = "root";
$password = "";
$db="licentanou2";

$mysqli =new mysqli($servername, $username, $password, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$nume = mysqli_real_escape_string($mysqli, $_POST['nume']);
$prenume = mysqli_real_escape_string($mysqli, $_POST['prenume']);
$numeutilizator = mysqli_real_escape_string($mysqli, $_POST['numeutilizator']);
$parola = mysqli_real_escape_string($mysqli,$_POST['parola']);
$nr_telefon = mysqli_real_escape_string($mysqli,$_POST['nr_telefon']);
$email = mysqli_real_escape_string($mysqli,$_POST['email']);
$gen = mysqli_real_escape_string($mysqli,$_POST['gen']);

$s = "SELECT * FROM user WHERE nume='$nume' LIMIT 1";

$result = mysqli_query($mysqli, $s);

$num=mysqli_num_rows($result);

if($num == 1){
    header('location:newlogin.php?error');

}else{
    $reg = "INSERT INTO user(nume , prenume, numeutilizator , parola , nr_telefon , email , gen) VALUES (?, ?, ?, ?, ? , ?, ?)";
    if($stmt = mysqli_prepare($mysqli , $reg)){
     mysqli_stmt_bind_param($stmt, "sssssss", $param_nume, $param_prenume, $param_numeutilizator,$param_parola,  $param_nr_telefon, $param_email, $param_gen);

         $param_nume = $nume;
         $param_prenume = $prenume;
         $param_numeutilizator = $numeutilizator;
         $param_parola = $parola;
         $param_nr_telefon = $nr_telefon;
         $param_email= $email;
         $param_gen = $gen;
         
         if(mysqli_stmt_execute($stmt)) {
         	
    		header('location:newlogin.php?success');

         	exit(); }

         	 else {
         	echo "Eroare";
         } 
  }


}
mysqli_close($mysqli);
?>