<?php
$filename = getcwd() . "/alarms.json";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$alarms = json_decode("{\"items\": [".$contents."]}", true);
$alarms = $alarms["items"];

//Always needed
exec("sudo amixer cset numid=3 1");

foreach ($alarms as $alarm) {
    if ($alarm["time"] == (localtime()["2"].":".localtime()["1"])){
        shell_exec("/var/alarm/speed.sh \"Good Morning, Jahn.\"");
        shell_exec("/var/alarm/speed.sh \"Playing some music!\"");
        //Security risk
        $play = 'sudo mpg123 /var/www/' . $alarm["music"];
        shell_exec($play);
    }
}
