<?php


try {
  $conn = new PDO("mysql:host=localhost;dbname=mahara",'root','');
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = $conn->prepare("SELECT * FROM products");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
    <title></title>
</head>
<body>

    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="">Home</a></li>
                <li class="uk-parent"><a href="">Blog</a></li>
                <li><a href="">About </a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        <div class="uk-navbar-left">
            <img src="https://cdn-icons-png.flaticon.com/512/4310/4310116.png" width="80" height="80">
        </div>
        <div class="uk-navbar-right">
            <div class="uk-margin-right">
                <button class="uk-button uk-button-link uk-margin-right">Login In</button>
                <button class="uk-button uk-button-danger">Sign Up</button>
            </div>
        </div>
    </nav>



    <div class="uikit-section">
        <table class="uk-table">
            <caption>The Contents of Products Database</caption>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Key</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            
            </thead>
                            

            <tbody>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php foreach ($data as $row) : ?>
                <tr>
                    <?php foreach ($row as $value) : ?>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td><?php echo $value;?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>


    </div>




    </body>
    </html>

