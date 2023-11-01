<?php
	require('conectare.php');
	session_start();
	if(isset($_SESSION["numeutilizator"]))
	{
		session_destroy();
	}
	
	
	if(isset($_POST['submit']))
	{	
		$numeutilizator = $_POST['numeutilizator'];
		$parola = $_POST['parola'];
		$numeutilizator = stripslashes($numeutilizator);
		$numeutilizator = addslashes($numeutilizator);
		$parola = stripslashes($parola); 
		$parola = addslashes($parola);
		$numeutilizator = mysqli_real_escape_string($mysqli,$numeutilizator);
		$parola = mysqli_real_escape_string($mysqli,$parola);					
		$str = "SELECT * FROM user WHERE numeutilizator='$numeutilizator' and parola='$parola'";
		$result = mysqli_query($mysqli,$str);
		if((mysqli_num_rows($result))!=1) 
		{
			echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
			header("refresh:0;url=newlogin.php");
		}
		else
		{   $_SESSION['logat']=$numeutilizator;
			$row=mysqli_fetch_array($result);
			$_SESSION['nume']=$row[1];
			$_SESSION['prenume']=$row[2];
			$_SESSION['id']=$row[0];
			$_SESSION['numeutilizator']=$row[3];
			$_SESSION['parola']=$row[4];
			header('location: Home.php'); 					
		}

		if($_SESSION["numeutilizator"]=="admin"){
			header('location: admin.php'); 
		} 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginstyle.css"v=<?php echo time(); ?>>
    <title>Login</title>

</head>

<body>
	

    <div class="container">
      <div class="row formular">
        <div class="col-md-9"></div>
          <div class="button-box">
            <div id="btn"></div>
          <button type="button" onclick="logare()" class="toggle-btn">Logare</button>
          <button type="button" onclick="inregistrare()" class="toggle-btn">Înregistrare</button>
        </div>
		
         <form id="logare" class="input-group" action="newlogin.php" method="POST" enctype="multipart/form-data">
   
                 <div class="form-group">
	              <input type="text" name="numeutilizator" placeholder="Nume utilizator" class="form-control" required>
                   </div>
				   
				    <div class="form-group">
					 <input type="password" name="parola" placeholder="Parola" class="form-control" required>
				    </div>
				   <br>
				   
				   <div class="form-group-logare">
	           <br>
	            <button type="submit" class="button3" name="submit">Logare</button>
	              </div>
          </form>
		  
		  
					<form id="inregistrare" class="input-group" action="inregistrare.php" method="POST">
	            <div class="form-group">
	              <input type="text" name="nume" placeholder="Nume" class="form-control" required><br>
	            </div>
	            <div class="form-group">
	             <input type="text" name="prenume" placeholder="Prenume" class="form-control" required><br>
	            </div>
							<div class="form-group">
	              <input type="text" name="nr_telefon" placeholder="Număr de telefon" class="form-control" required><br>
	            </div>
							<div class="form-group">
	              <input type="email" name="email" placeholder="Email" class="form-control" required><br>
	            </div>
							<div class="form-group">
	              <input type="text" name="numeutilizator" placeholder="Nume utilizator" class="form-control" required><br>
	            </div>
	            <div class="form-group">
	              <input type="password" name="parola" placeholder="Parola" class="form-control" required><br>
	            </div>
							<div class="form-group">
								<div class="gen">
								<label><br>Gen</label>
								<input type="radio" id="masculin" name="gen" value="M">
								<label for="masculin">M</label>
								<input type="radio" id="feminin" name="gen" value="F">
								<label for="feminin">F</label>
								
							</div>
	            </div>
	            <div class="form-group-inregistrare">
	              <input type="checkbox" class="check-box" required><span>Sunt de acord cu termenii și condițiile impuse <a href="https://policies.google.com/terms?hl=ro" alt="Termeni și condiții">Citește termeni și condiții</a></span>
	            </div>
	            <button type="submit" class="button" >Înregistrare</button>
          </form>
        </div>
      </div>
		  
	          
		<script type="text/javascript" src="javascript/login_register.js"></script>
</body>
</html>







