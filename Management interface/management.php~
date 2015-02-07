<!DOCTYPE html>
<?php include('mysql.php'); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Alarm Clock</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="two columns" style="margin-top: 25%"></div>
        <div class="eight columns" style="margin-top: 25%">
		<a href="index.html" class="button u-pull-right">back</a>
		<h4>Alarm Management</h4>
                <table class="u-full-width">
		<thead>
		<th>Time</th>
		<th>Track</th>
		<th>Edit</th>
		</thead>
		<tbody>
		<?php
		foreach ($dbh->query('SELECT * from alarms a, tracks t where a.track_id = t.id') as $row) {
      		echo '<tr><td>' . $row["time"] . '</td><td>' . $row["path"] . '</td><td><a class="button" href="alarm_delete.php?alarm_id=' . $row["0"] . '">delete</td></tr>';
   		}
		?>
		</tbody>
		</table>
	    <form action="track_add.php" method="POST">
		<h4>Add a track</h4>
		<label for="track_file"  class="u-full-width">File: <input type="file" name="track_file" id="track_file" class="u-pull-right"></label>
		<span class="u-cf"></span>
		<input type="submit" class="button u-pull-right" value="Submit">
            </form>
        </div>
        <div class="two columns" style="margin-top: 25%"></div>
    </div>
</div>
</body>
</html>
