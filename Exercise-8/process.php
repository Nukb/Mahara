<?php

require_once __DIR__ . '/autoloader.php';

use Maharah\Classes\SamsungProduct;
use Maharah\Classes\IphoneProduct;

$quantity = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

    $product = isset($_POST['product']) ? htmlspecialchars(strip_tags($_POST['product'])) : '';

    if ($quantity > 0) {

        if ($product == 'Iphone11') {
            $product = new IphoneProduct('iPhone 15 Pro', 1000, $quantity);
        } else {
            $product = new SamsungProduct('Samsung Galaxy S23 ULTRA', 1000, $quantity);
        }

        $information = $product->displayProductInfo();

        $cost = $product->calculateTotalCost();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>

<body>
    <div class="uk-container uk-margin-top">

        <div class="uk-text-center uk-margin">
            <img src="logo.svg" alt="Logo" width="100px" /><br />
            <h1>Maharah Exercise</h1>
        </div>

        <hr />

        <?php if ($quantity > 0) { ?>

            <strong><?php echo $information; ?></strong>

            <br />

            <strong>Price: <?php echo $cost . " LYD"; ?></strong>

        <?php } else { ?>

            <div class="uk-alert-danger uk-padding-small" uk-alert>
                <p>Quantity must be greater than 0</p>
            </div>

        <?php } ?>

    </div>

</body>

</html>