<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $name= [
        "Lidya",
        "violeta" ,
        "anestasia" ,
        "Arthur",
        "David" 
    ];
    $height =[180,159,177,160,175];
     $count =[1,2,3,4,5,6];


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
            <td><?=  $count?></td>
            <td><?=  $name ?></td>
            <td><?=  $height ?></td>
        </tr>
     </table>
    <?php
    }
    ?>
</body>

</html>