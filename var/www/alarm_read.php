<?php
$filename = getcwd() . "/alarms.json";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$alarms = json_decode("{\"items\": [".$contents."]}", true);
$alarms = $alarms["items"];

//Api key hack
include("secret.php");

//Weather code
$request_url = 'https://api.forecast.io/forecast/'
    . $apiKey
    . '/'
    . '53.7560'
    . ','
    . '9.6602'
    .'?units=si';

$response = json_decode(file_get_contents($request_url));
$response->headers = $http_response_header;

//Always needed
exec("sudo amixer cset numid=3 1");


foreach ($alarms as $alarm) {
    if ($alarm["time"] == (localtime()["2"].":".localtime()["1"])){
        shell_exec("sudo /var/alarm/speech.sh \"Good Morning, Jahn.\"");
        shell_exec("sudo /var/alarm/speech.sh \"The weather outside is " . $response->currently->summary . " with " . $response->currently->temperature . " degreees out there.\"");
        shell_exec("sudo /var/alarm/speech.sh \"Playing some music!\"");
        //Security risk
        $play = 'sudo mpg123 /var/www/' . $alarm["music"];
        shell_exec($play);
    }
}
