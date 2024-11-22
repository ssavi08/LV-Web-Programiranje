<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['ime']) && isset($_GET['prezime'])) {
        $ime = htmlspecialchars($_GET['ime']);
        $prezime = htmlspecialchars($_GET['prezime']);
        echo "<h1>$ime $prezime</h1>";
    } else {
        echo "<h1>Dogodila se pogreska</h1>";
    }
    ?>
</body>
</html>