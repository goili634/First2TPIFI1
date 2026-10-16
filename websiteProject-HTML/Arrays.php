<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php

        $names = ["john", "angelina", "shakira", "ronaldo", "michelle"];

        for ($i = 0; $i < count($names); $i++) {
            print "<li>" . $names[$i] . "</li>";
        }
        ?>
    </ul>

    <table>
        <tr>
            <th>Number</th>
            <th>Name</th>
        </tr>

        <?php
        for ($i = 0; $i < count($names); $i++) {
        ?>
            <tr>
                <td><?php print $i; ?></td>
                <td><?php print $names[$i]; ?></td>
            </tr>
        <?php
        }
        ?>


    </table>
</body>

</html>