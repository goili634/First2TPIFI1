<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $heights= [
        "Lidya" =>180,
        "violeta"=>159 ,
        "anestasia"=>177 ,
        "Arthur"=>160,
        "valerii"=>175 
    ];

    $heights["David"] = 175;
    $heights["Arthur"] = 169;

    ?>
    <table>
        <tr>
            <th>Count</th>
            <th>Name</th>
            <th>Height</th>
        </tr>
    <?php

    foreach ($heights as $name => $height) {
    ?>
        <tr>
          
            <td><?=  $name ?></td>
            <td><?=  $height ?></td>
        </tr>
     </table>
    <?php
    }
    ?>
</body>

</html>