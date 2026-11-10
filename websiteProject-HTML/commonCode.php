 <?php

  $lang = "english";
  if(isset($_GET["lang"]))
    {
        $lang= $_GET["lang"];
    }

  $translations = [];

  $fileTranslations = fopen("Translations.csv","r");
  while(!feof($fileTranslations))
    {
      $anotherLineOfText = fgets($fileTranslations);
      $oneLineArray = explode(";",$anotherLineOfText);

      if(count($oneLineArray)== 3)

      if ($lang== "english") {

         $translations[$oneLineArray [0]] = $oneLineArray [1];
      }
      else {
        $translations[$oneLineArray [0]] = $oneLineArray [2];
      }
     
      //print( $anotherLineOfText);
      //print("br");
    }


    function navigationbar($activePage, $language)
    {
        global $translations;

    ?>
     <nav>
         <ul id="mainLinks">
             <li><a href="index.php" <?php if ($activePage == 'home') {
                                            print 'class="active"';
                                        } ?>><?=$translations["HomeBtn"]?></a></li>
             <li><a href="about.php" <?php if ($activePage == 'about') {
                                            print 'class="active"';
                                        } ?>><?=$translations["AboutBtn"]?></a></li>
             <li><a href="contact.php" <?php if ($activePage == 'contact') {
                                            print 'class="active"';
                                        } ?>><?=$translations["ContactBtn"]?></a></li>
             <li><a href="products.php" <?php if ($activePage == 'products') {
                                            print 'class="active"';
                                        } ?>><?=$translations["ProductsBtn"]?></a></li>
         </ul>

         <ul id="languageLinks">

             <li><a href="index.php" <?php if ($language= "en") print ("class="active"");?>>English</a></li>
             <li><a href="index.php?lang=amh">Amharic</a></li>
         </ul>
     </nav>
 <?php
    }

