<?php
header('Access-Control-Allow-Origin: *');
$host = 'localhost';
$username = 'root';
$password = ' '; 
$dbname = 'supermarket';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


$supermarket = filter_input(INPUT_GET, "market", FILTER_SANITIZE_STRING);
///echo $supermarket;
$my_supermarket = $conn->query("SELECT * FROM supermarket WHERE name LIKE '%$supermarket%'");
$results = $my_supermarket->fetchAll(PDO::FETCH_ASSOC);


?>

<?php if(isset($supermarket)):?>
  <table class = "display">
      <caption><h2>TABLE SHOWING STORES<h2></caption>
    <thead>
      <tr>
          <th class = "row1">Name</th>
          <th class = "row2">Planogram</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $supermarket): ?>
          <tr>
            <td><?php echo $supermarket["name"]; ?></td>
            <td><?php echo $supermarket["planogram"]; ?></td>
          </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>




