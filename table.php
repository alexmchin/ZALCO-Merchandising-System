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
  <link rel="stylesheet" href="competitorTable.css"> 
</head>
<body>
      <div class="tableList">
        <table id="table">
          <h2>Competitor Activity Table</h2>
            <thead>
            <tr>
              <th scope="col">Competitor Name</th>
              <th scope="col">Brand Name</th>
              <th scope="col">Market Activity</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $sql= "SELECT * FROM competitoractivity;";
                $result = mysqli_query($conn2, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                  while($row= mysqli_fetch_assoc($result)){
                    echo "<tr>
                           <td> ".$row['Competitor_Name']."</td> 
                           <td> ".$row['Brand_Name']."</td> 
                           <td> ".$row['Market_Activity']."</td> 
                        </tr>";
                  }
                }
              ?>
            </tbody>
        </table>
      </div>
      <input type="submit" value=" Go back!" onclick="history.back()" name="submit">

</body>
</html>