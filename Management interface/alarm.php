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
        <d	iv class="two columns" style="margin-top: 25%"></div>
        <div class="eight columns" style="margin-top: 25%">
	  <a href="index.html" class="button u-pull-right">back</a>
            <form action="alarm_save.php" method="POST">
		<h4>Set a new alarm</h4>
                <input type="text" name="time" value="<?php echo localtime()["2"].":".localtime()["1"] ?>" class="u-full-width">
		<select type="text" name="track" class="u-full-width">
		<?php
		foreach ($dbh->query('SELECT * from tracks') as $row) {
      		echo '<option value="' . $row["id"] . '">' . $row["path"] . '</option>';
   		}
		?>
		</select>
                <input type="submit" class="u-full-width" value="Save">
            </form>
        </div>
        <div class="two columns" style="margin-top: 25%"></div>
    </div>
</div>
</body>
</html>
