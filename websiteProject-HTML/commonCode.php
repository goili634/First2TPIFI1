 <?php
    function navigationbar($activePage, $language)
    {

        if ($language == 'english') {
        }
    ?>
     <nav>
         <ul id="mainLinks">
             <li><a href="index.php" <?php if ($activePage == 'home') {
                                            print 'class="active"';
                                        } ?>>Home</a></li>
             <li><a href="about.php" <?php if ($activePage == 'about') {
                                            print 'class="active"';
                                        } ?>>About</a></li>
             <li><a href="contact.php" <?php if ($activePage == 'contact') {
                                            print 'class="active"';
                                        } ?>>Contact</a></li>
             <li><a href="products.php" <?php if ($activePage == 'products') {
                                            print 'class="active"';
                                        } ?>>Products</a></li>
         </ul>

         <ul id="languageLinks">

             <li><a href="index.php" class="active">English</a></li>
             <li><a href="about.php">Amharic</a></li>
         </ul>
     </nav>
 <?php
    }

