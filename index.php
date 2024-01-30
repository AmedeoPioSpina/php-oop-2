<?php 
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Kennel.php';

$catsCategory = new Category('Cats', 'Profucts for cat', 'https://cdn-icons-png.flaticon.com/512/220/220124.png');
$caniCategory = new Category('Dogs', 'Prodotti per dog', 'https://cdn-icons-png.flaticon.com/512/620/620851.png');

$leash =  new Product('Chain Leash', 'Chain leash that you can use for your pets mainly', 33.33, 'https://img.fruugo.com/product/1/78/718223781_max.jpg', true, 12, $dogsCategory);
$littleBell =  new Product('Little Brass Bell', 'A little brass bell for feel cats', 8.99, 'https://cdn.4stand.com/huge/a5/a6/a5a6b9a0c408eb9bd4fb7036917751a22f18152d.jpg', true, 36, $catsCategory);
$chickenBits =  new Food('Chain Leash', 'Chain leash that you can use for your pets mainly', 10.99, ' ', true, 12, $dogsCategory, '23.32', '12.45', '40.76');
$mouse =  new Toy('Rubber Mouse', 'Rubber mouse is a funny game for cat', 6.99, ' ', true, 12, $dogsCategory, '5cm x 2cm');

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