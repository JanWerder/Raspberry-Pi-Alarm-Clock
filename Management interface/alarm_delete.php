<?php
include("mysql.php");

if (!empty($_GET["alarm_id"])){
    $alarm_id = $_GET["alarm_id"];
    $stmt = $dbh->prepare("DELETE FROM alarms WHERE id = :alarm_id");
    $stmt->bindParam(':alarm_id', $alarm_id);
    $stmt->execute();
    echo "Alarm no. " . $alarm_id . " has been deleted";

}else{
    echo "Alarm id parameter was empty";
}	

?>
