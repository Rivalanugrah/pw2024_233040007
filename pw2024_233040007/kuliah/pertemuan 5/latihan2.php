<?php
$binatang = ["😹", "🐻","🐭","🦁","🙉"];

$Makanan = ["🧋", "🐻","🐭","🦁","🙉"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>

<body>
<!--Binatang-->
    <h3> Daftar Binatang</h3>
    <ol>
        <?php for($i = 0; $i< count($binatang); $i++) { ?>
        <li> <?php echo $binatang[$i]; ?> </li>
        <?php } ?>
    </ol>    


<!-- Makanan -->
    <h3> Daftar Makanan</h3>
    <ol>
        <?php for($i = 0; $i< count($Makanan); $i++) { ?>
        <li> <?php echo $Makanan[$i]; ?> </li>
        <?php } ?>
    </ol>    

    <hr>

<!-- Binatang -->
    <h3>Daftar Binatang<h3>

    <ol>
        <?php foreach ($binatang as $b) : ?>
        <li><?= $b; ?></li>
    <?php endforeach; ?>

<br>

<!-- Makanan -->
    <h3>Daftar Makanan<h3>

<ol>
    <?php foreach ($Makanan as $b) : ?>
    <li><?= $b; ?></li>
<?php endforeach; ?>



</body>
</html>