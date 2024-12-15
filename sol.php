<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ex4.php" method="post">
        <input type="radio" name="loisir[]" value="sport">sport</input>
        <input type="radio" name="loisir[]" value="music">music</input>
        <input type="radio" name="loisir[]" value="jeu">jeu</input>
        <input type="radio" name="loisir[]" value="voyage">voyage</input>
        <input type="submit" value="Envoyer">
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $loisirs  = $_POST["loisir"];
    foreach ($loisirs as $key) {

        print_r("loisirs: " . $key);
    }
}
?>

</html>
