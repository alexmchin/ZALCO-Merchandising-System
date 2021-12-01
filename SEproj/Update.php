<?php
include 'connect.php';

$res = "SELECT * FROM inventory";
$result = $conn->query($res);
if ($result->num_rows > 0) {
    # Output data for each row
   
    echo " <div id='inventorytable'>";
    while($row = $result->fetch_assoc()) {
       echo "<tr ",">",
           "<td>", $row["ID"],"</td>",
            "<td>", $row["Product Name"],"</td>",
            "<td>", $row["Stock on Shelf"],"</td>",
            "<td>", $row["Expiry Date"],"</td>",
            "<td>", $row["Lot Number"],"</td>",
            "<td>", $row["Picture of Shelf"],"</td>",
            "<td>",
                "<form action='update.php' method='post'>
                 <input name='id' value='",$row["ID"],"' hidden>
                 </form>",
            "</td>",
            "<td>",
                "<form action='form-post.php' method='post'>
                 <input name='id' value='",$row["ID"],"' hidden>
                </form>",
            "</td>",
            "</tr>";
    }
    echo  "</table>";
}else {
 echo "No Records!";
}

?>