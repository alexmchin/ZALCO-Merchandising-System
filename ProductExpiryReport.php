<?php
/*$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "zalco";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - supermarketName: ". $row["supermarketName"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();*/
?>

<?php
    class ProductExpiryReport{
        public $id;
        public $productName;
        public $expirationDate;
        public $currentDate;
        public $shelfLife;

        function set_name($productName) {
            $this->productName = $productName;
            echo "Test Case 1";
        }

        function get_name() {
            return $this->productName;
        }
        

        public function calcRemShelfLife($expirationDate, $currentDate)
        {
            echo "Test Case 2";
            $date1 = $expirationDate;
            $date2 = $currentDate;

            $ts1 = strtotime($date1);
            $ts2 = strtotime($date2);

            $year1 = date('Y', $ts1);
            $year2 = date('Y', $ts2);

            $month1 = date('m', $ts1);
            $month2 = date('m', $ts2);

            $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
            $this->shelfLife = $diff;
        }

        public function displayShelfLife($productName,$shelfLife)
        {
            echo $productName,$shelfLife;
        }

        
    }
    $obj = new ProductExpiryReport();
    $obj->set_name('HiLo');
    echo $obj->get_name();
    $obj->calcRemShelfLife('2010-02-20','2000-01-25');
    $obj->displayShelfLife();
?>

