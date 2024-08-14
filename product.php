<?php
$products = [
    1 => [
        "name" => "Product 1",
        "price" => "$19.99",
        "description" => "This is a great product.",
        "image" => "p1.jpg"
    ],
    2 => [
        "name" => "Product 2",
        "price" => "$29.99",
        "description" => "This is another great product.",
        "image" => "p2.jpg"
    ]
];

$product_id = $_GET['id'] ?? 1;
$product = $products[$product_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> - Simple E-commerce Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1><?php echo $product['name']; ?></h1>
    </header>

    <div class="container">
        <div class="product">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h2><?php echo $product['name']; ?></h2>
            <p>Price: <?php echo $product['price']; ?></p>
            <p><?php echo $product['description']; ?></p>
            <a href="index.php">Back to Store</a>
        </div>
    </div>
</body>
</html>
