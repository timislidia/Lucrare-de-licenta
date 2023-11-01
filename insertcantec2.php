<?php 

include "conectare.php"; 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];
$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$titlu = mysqli_real_escape_string($mysqli, $_REQUEST['titlu']);
$autor = mysqli_real_escape_string($mysqli, $_REQUEST['autor']);

if (isset($name)) {

$path= 'Cantece/';
$target_file = $path . $_FILES["file"]["name"];

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
 $insert = mysqli_query($mysqli, "INSERT INTO resurse(titlu, autor, id_categorie, id_format, sursa) 
         VALUES('$titlu', '$autor', '1', '1', '".$target_file."')") ;
echo 'Cântec adăugat!';
}

else {
	echo "Eroare";
}
}
}



?>


 