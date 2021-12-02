<?php
require_once 'connect.php';
    $conn = new mysqli("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    if(empty($_POST['productname']) && empty($_POST['stoockonshelf']) && empty($_POST['expirydate'])&& empty($_POST['lotnumber'])){
        echo "Please Enter Data";
    }

    $productname= filter_input(INPUT_POST, 'productname_regform', FILTER_SANITIZE_STRING);
    $stockonshelf= filter_input(INPUT_POST, 'stockonshelf_regform', FILTER_SANITIZE_STRING);
    $expirydate= filter_input(INPUT_POST, 'expirydate_regform', FILTER_SANITIZE_STRING);
    $lotnumber= filter_input(INPUT_POST, 'lotnumber_regform', FILTER_SANITIZE_STRING);
    
$target_dir = "/download";
$picofshelf = $target_dir . basename($_FILES["picofshelf"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["picofshelf"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
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
if ($_FILES["picofshelf"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 ) {
  echo "Sorry, only JPG, JPEG, PNG files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["picofshelf"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["picofshelf"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
    $im = @imagecreatefrompng($picofshelf);
    $text_color = imagecolorallocate ($im, $Red,$Green,$Blue);
    imagestring ($im, 3,  5, 15,  $SomeTextFromURL, $text_color);
    

    //var_dump($firstname,$lastname,$password,$email);
    $stmt = "INSERT INTO inventory (ID,'Product Name','Stock on Shelf','Expiry Date','Lot Number','Picture of Shelf') VALUES ('$productname','$stockonshelf','$expirydate','$lotnumber','$picofshelf')";
    //$stmt= $conn->query("INSERT INTO `users`(`firstname`,`lastname`,`password`, `email`) VALUES ($firstname,$lastname,$password,$email)");
    //$stmt= $conn->query("INSERT INTO `users`(`firstname`,`lastname`,`password`, `email`) VALUES ($firstname,$lastname,$password,$email)");
    /*$stmt->bindParam(":productname", $productname);
    $stmt->bindParam(":stockonshelf", $stockonshelf);
    $stmt->bindParam(":expirydate", $expirydate);
    $stmt->bindParam(":lotnumber", $lotnumber);
    $stmt->bindParam(":picofshelf", $picofshelf);
    $stmt->execute();
*/
if (mysqli_query($conn, $stmt)) {

      echo("Product Added successfully");
      var_dump($productname,$stockonshelf,$expirydate,$lotnumber,$picofshelf);
} else{
  echo("Error!".$conn->error);
}
?>
