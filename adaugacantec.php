<?php 


include "conectare.php";

$uploaddir = '/www/Licenta2/Cantece/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$uploaddir = '/www/Licenta2/Cantece/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
$titlu= $_POST['titlu'];
$autor= $_POST['autor'];


if (empty($name))
{
echo "Please choose a file";
}
else if (!empty($name)){
if (($fileextension !== "mp3") && ($fileextension !== "vmw") && ($fileextension !== "webm"))
{
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}
}

else if (($fileextension == "mp3") || ($fileextension == "ogg") || ($fileextension == "webm"))
{

 if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Upload failed";
    }
}



if(!empty($titlu)){
$insert=("INSERT INTO resurse(titlu, autor, id_categorie, id_format, sursa) 
VALUES ('$titlu', '$autor', '1', '1', '$uploadfile')");
if(mysqli_query($mysqli, $insert)){
	echo "INSERAT!";
}
}


?>