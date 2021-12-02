<?php
class Database{

    var $host="localhost";
    var $user="root";
    var $pass="";
    var $db="competitoractivitydb";
    var $tbname="competitoractivity";

    public function connect(){
        $con= mysqli_connect($this->host, $this->user,$this->pass, $this->db);
        return $con;
    }
    
    public function saveRecords($c, $b, $m){
        $vals=[$c, $b, $m];
        $conn=$this->connect();
        if(!empty($vals)){
            mysqli_query($conn, "insert into ".$this->tbname."(
                Competitor_Name, Brand_Name, Market_Activity) values('$c','$b','$m')") or die(
            mysqli_error($conn));
    
            echo "<div style=' align=center; margin-left:100px; text-color:red;'>
            Data Added</div>";
        }else{
        echo "Data not added, EMPTY FIELDS!";
    }

}
}

?>