
<?php
require('user_validator.php');

$errors=[];

if(isset($_POST['submit'])){
  //validate entries
  $validation = new UserValidator($_POST);
  $errors = $validation->validateForm();

  //save data to db


}
?>

<?php
$conn2= mysqli_connect("localhost", "root", "", "competitoractivitydb");
// if($conn2){
//   echo "successful";
// }else{
//   echo "error";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>ZALCO MERCHANDISING SYSTEM</title>
  <link rel="stylesheet" href="competitorForm.css"> 
</head>
<body class= "compAct">
   
      
      <div class = "compActForm">
          <h2>Competitor Activity Form</h2>
          <form action="<?php echo $_SERVER["PHP_SELF"] ?>"   method="POST" auto_complete="off">
            <label>Competitor Name</label>
            <input type="text" id="compName" name="compName"  >
            <div class="error"> <?php echo $errors['compName'] ?? ""?> </div>

            <label>Brand Name</label>
            <input type="text" id="brandName" name="brandName" >
            <div class="error"> <?php echo $errors['brandName'] ?? ""?> </div>

            <label>Market Activity</label>
            <input type="text" id="notes" name="notes" maxlength="200"></input>
            <div class="error"> <?php echo $errors['notes'] ?? ""?> </div>
            
            <input type="submit" value="Save " name="submit">
            <input type="submit" value="View Table" formaction="table.php" name="submit">
          
            <?php

              if(isset($_POST["submit"])){
                include "database.php";
                $compName= $_POST['compName'];
                $brandName= $_POST['brandName'];
                $notes=$_POST['notes'];

                $obj = new Database();
                $obj->saveRecords($compName, $brandName, $notes);
              }

            ?>
          </form>
      </div>
</body>
</html>

