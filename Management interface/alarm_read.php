<?php
include("mysql.php");

//Always needed
exec("sudo amixer cset numid=3 1");

foreach ($dbh->query('SELECT * from alarms a, tracks t where a.track_id = t.id') as $row) {
if ($row["time"] == (localtime()["2"].":".localtime()["1"])){
	//exec synth
    }
}

