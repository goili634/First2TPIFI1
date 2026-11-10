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
        <ul  id="mainLinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
            <li><a href="products.php">Products</a></li>
        </ul>
   
         <ul id="languageLinks">
         
            <li><a href="contact.php" class="active">English</a></li>
            <li><a href="contact-amh.php">Amharic</a></li>
        </ul>
        </nav>
    <h2> please type your username:</h2>
    

    <?php
          
           if(isset($_POST["username"])){
           print "Hello".$_POST["username"];
        }
        else 
       {
      ?>
      
        <form method="POST">
            please type your name: <input type= "text" name= "username"> 
            <br>
            please type your password: <input type= "password" name= "psw>

            <button type= "submit" > send data</button>
            </form>
    <?php
        }
    ?>    

   
</body>
</html>