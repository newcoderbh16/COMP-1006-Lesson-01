<?php
    require_once "./src/PageData.php";

    $pgData = new PageData("My first App", "Holy Cow, Batman! This is the Awesomest!");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php
                echo $pgData->getTitle(); 
            ?>
        </title>
    </head>
    <body>
        <h1><?= $pgData-> getTitle() ?></h1>
        <p><?= $pgData-> getContent() ?></p>

    </body>
</html>