<!DOCTYPE html>
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
            <form action="alarm_save.php" method="POST">
                <input type="text" name="time" value="15:16" class="u-full-width">
                <input type="text" name="music" value="RichAsFuck.mp3" class="u-full-width">
                <input type="submit" class="u-full-width" value="Save">
            </form>
        </div>
        <div class="two columns" style="margin-top: 25%"></div>
    </div>
</div>
</body>
</html>
