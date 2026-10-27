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
    <h2> please give the correct answer:</h2>

    <?php
    
           if(isset($_GET["integer"])){
           print "Hello".$_GET["integer"];
        }
        else 
       {
      ?>
      
        <form method="GET" action= "Hello.php">


       <label for="number1">Number 1:</label>
<input type="number" id="number1" placeholder="Enter first number" onchange="addNumber()"> <br>
<label for="number2">Number 2:</label>
<input type="number" id="number2" placeholder="Enter second number" onchange="addNumber()"> <br>
<button type="submit" onclick="addNumber()">Add</button>
<input type="text" id="result" placeholder="Result" readonly>
        <button type="submit">Complete AB </button>
    </form>
    <?php
        }
    ?>    

   
</body>
</html>