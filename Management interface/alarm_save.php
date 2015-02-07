<?php
include('mysql.php');

$time = $_POST["time"];
$track_id = $_POST["track"];

if(!empty($_POST["time"])){
    $stmt = $dbh->prepare("INSERT INTO alarms (time, track_id) VALUES (:time, :track_id)");
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':track_id', $track_id);
    $stmt->execute();
    echo "Alarm has been saved.";
}

?>
