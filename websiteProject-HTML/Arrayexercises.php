<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php

        $Firstnames = ["john", "angelina"];
        $Familynames = ["joe", "juily"];
        ?>


    <table>
        <tr>
            <th>FirstName</th>
            <th>FamilyName</th>
        </tr>

        <?php
        for ($i = 0; $i < count($Firstnames); $i++) {
        ?>
            <tr>
                <td><?php print $Firstnames[$i]; ?></td>
                <td><?php print $Familynames[$i]; ?></td>
            </tr>
        <?php
        }
        ?>
        
    </table>
</body>
</html>