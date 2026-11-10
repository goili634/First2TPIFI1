<!DOCTYPE html>
<html lang="english">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello from HTML</h1>
    <?php
      
      include_once ("commonCode.php");
      navigationbar("home",$lang);
        
    ?>
    <h1> <?= $translations["HomePageWelcome"] ?></h1>
      
 
</body>
</html>