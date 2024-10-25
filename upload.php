
<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('functions.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
  } else {
    echo "Sorry, there was an error uploading your file.";
    //echo "<img src = ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " >";
  }
}


// $msg = 'Test KRIPTOGRAFIJA.'; //To encrypt
// $src = 'start.jpg'; //Start image

$msg = $_POST["tekst"]; //To encrypt
$src = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])); //Start image


$msg .='|'; //EOF sign, decided to use the pipe symbol to show our decrypter the end of the message
$msgBin = toBin($msg); //Convert our message to binary
$msgLength = strlen($msgBin); //Get message length
$img = imagecreatefromjpeg($src); //returns an image identifier
list($width, $height, $type, $attr) = getimagesize($src); //get image size

if($msgLength>($width*$height)){ //The image has more bits than there are pixels in our image
  echo('Message too long. This is not supported as of now.');
  die();
}

$pixelX=0; //Coordinates of our pixel that we want to edit
$pixelY=0; //^

for($x=0;$x<$msgLength;$x++){ //Encrypt message bit by bit (literally)

  if($pixelX === $width+1){ //If this is true, we've reached the end of the row of pixels, start on next row
    $pixelY++;
    $pixelX=0;
  }

  if($pixelY===$height && $pixelX===$width){ //Check if we reached the end of our file
    echo('Max Reached');
    die();
  }

  $rgb = imagecolorat($img,$pixelX,$pixelY); //Color of the pixel at the x and y positions
  $r = ($rgb >>16) & 0xFF; //returns red value for example int(119)
  $g = ($rgb >>8) & 0xFF; //^^ but green
  $b = $rgb & 0xFF;//^^ but blue

  $newR = $r; //we dont change the red or green color, only the lsb of blue
  $newG = $g; //^
  $newB = toBin($b); //Convert our blue to binary
  $newB[strlen($newB)-1] = $msgBin[$x]; //Change least significant bit with the bit from out message
  $newB = toString($newB); //Convert our blue back to an integer value (even though its called tostring its actually toHex)

  $new_color = imagecolorallocate($img,$newR,$newG,$newB); //swap pixel with new pixel that has its blue lsb changed (looks the same)
  imagesetpixel($img,$pixelX,$pixelY,$new_color); //Set the color at the x and y positions
  $pixelX++; //next pixel (horizontally)

}
$randomDigit = rand(1,9999); //Random digit for our filename
//move_uploaded_file(imagepng($img,'result' . $randomDigit . '.png'), $target_dir);
imagepng($img,'result' . $randomDigit . '.png'); //Create image
echo "<br>";

//echo "Izvorna slika je ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])); echo "<br>";
    //echo "Skriveni tekst je: " . $_POST["tekst"]; echo "<br>"; 
   // echo('Slika sa skrivenim tekstom je: ' . 'result' .  $randomDigit . '.png'); //Echo our image file name
  echo('<label class="label"> Slika sa skrivenim tekstom!</label> '); //Echo our image file name
    echo "<br>";
     echo "<br>";
    echo "<form action=\"decrypt.php\" method=\"post\" enctype=\"multipart/form-data\">";
    echo '<input type="hidden"  name="originalna_slika" value=' . htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). '>';
    echo "<input type=\"hidden\"  name=\"skrivena_slika\" value=" . 'result' . $randomDigit . ".png" . ">";
     echo "<input type=\"submit\" value=\"DECRYPT\" name=\"submit\">";
     echo "</form>";
    //echo "<img src = uploads/". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " width=\"600\" height=\"600\">";
     echo "<img src = ./" . 'result' . $randomDigit . ".png" . " width=\"600\" height=\"600\">";
     echo "<br>";
     echo "<br>";



imagedestroy($img); //get rid of it
?>


