<?php 
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';

$product = new Product('Gatto', 'Felini', 'Gioco', 'imgCategoria', 'Topo di pezza', '2,99', 'immagine topo di pezza');

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