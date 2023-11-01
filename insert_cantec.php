<?php 
include "conectare.php"; 
$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$titlu= $_POST['titlu'];

if (isset($name)) {

$path= 'Cantece/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';


}
}
}

if(!empty($titlu)){
$insert=("INSERT INTO resurse(titlu, id_categorie, id_format, sursa) 
VALUES ('$titlu', '1', '1', '$path$name')");
if(mysqli_query($mysqli, $insert)){
  echo "Cântec adăugat!";
}
}


?>
