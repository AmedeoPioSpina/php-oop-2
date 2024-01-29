<?php 
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Kennel.php';

$catsCategory = new Category('Gatti', 'Prodotti per gatti', 'https://cdn-icons-png.flaticon.com/512/220/220124.png');
$caniCategory = new Category('Cani', 'Prodotti per cani', 'https://cdn-icons-png.flaticon.com/512/620/620851.png');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <ul>
            <!-- <?php foreach($product as $key -> $value ){ ?>
                <li>

                </li>
            <?php } ?> -->

        </ul>
    </main>
</body>
</html>