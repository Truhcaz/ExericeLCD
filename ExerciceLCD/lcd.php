<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCD</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="lcd.js"></script>
</head>
<body>
    <h1>Ecrivez un nombre</h1>
    <form method="post" name="form" action="print.php" onsubmit="return sub(this)">
        <input type="number" name="nb">
        <input type="submit" name="button" value="Envoyez">
      </form>
</body>
</html>
