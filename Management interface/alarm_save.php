<?php

if(!empty($_POST["time"])){
    $alarm = array("time" => $_POST["time"],"music" => $_POST["music"]);

    //read other alarms
    $filename = getcwd() . "\\alarms.json";
    $handle = fopen($filename, "a");
    if(filesize($filename) == 0) {
        fwrite($handle, json_encode($alarm));
    }else {
        fwrite($handle, ",".json_encode($alarm));
    }
    fclose($handle);
}

?>