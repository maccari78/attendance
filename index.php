<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h2>Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Simple array and printouts</a></li>
        <li><a href="forloop.php">Simple FOR LOOP</a></li>
        <li><a href="whiledowhileloop.php">Simple WHILE / DO WHILE LOOP</a></li>
        <li><a href="ifstatement.php">Simple IF statement</a></li>
        <li><a href="switchstatement.php">Simple SWITCH statement</a></li>
    </ul>
    <!-- Basic HTML -->
    <h1>Hello world from HTML5</h1>
    <br/>
    <?php
        // Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'second line from PHP';
        echo '<br/>';
    ?>

    <?php 
        // Variables need a '$'. They are not strongly typed
        $name = 'Danilo Maccari';
        $age = 43;
        // echo variable
        echo $name;
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';
        // echo using double cuotes and interpolation
        echo "<h1>My name is: $name </h1>";
    ?>
</body>
</html>