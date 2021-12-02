<table>
<tr>
    <td>Product Name</td>
    <td>Remaining Shelf Life</td>
</tr>
<!-- <?php
if(mysql_num_rows($raw_results) > 0){ 
        while($results = mysql_fetch_array($raw_results)){
            echo "<tr><td>".$results['id']."</td>";
            echo "<td>".$results['age']."</td>";
            echo "<td>".$results['course']."</td>";
            echo "<td>".$results['gender']."</td></tr>";
        }
    }
?> -->
</table>

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

