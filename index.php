<?php 
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';

$product = new Product('felino', 'topo');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        var_dump($product);
    ?>
</body>
</html>