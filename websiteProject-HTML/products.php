<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myStyles.css">
</head>

<body>


    <nav>
        <ul id="mainLinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="products.php" class="active">Products</a></li>
        </ul>

        <ul id="languageLinks">

            <li><a href="index.php" class="active">English</a></li>
            <li><a href="about.php">Amharic</a></li>
        </ul>
    </nav>

    <?php
    include_once("commonCode.php");
    navigationbar("products", "english");
    $namesOfproducts = ["short","skirt","socks","T-shirt","WhiteTshirt", "underWear"];
    $imagesofproducts= ["images/short.png","images/skirt.png","images/socks.png", "images/T-shirt.png", "images/WhiteTshirt.png","images/underWear"];
    $priceOfproducts = ["price $19.99","price  $12.99","price  $19.99","price  $10.99","price  $9.99","price  $29.99"];
    ?>

    <div class="AllItems">
        <?php
         for ($i = 0; $i < count($namesOfproducts); $i++) {

     ?>

        <div class="oneItem">
            <div><?php print $namesOfproducts[$i];?></div>
            <img src="<?= $imagesofproducts[$i]?>" alt="$namesOfproducts[$i]">
            <div><?php print $priceOfproducts[$i];?></div>
        </div>
        
        <?php
        }
        ?>
</body>

</html>