<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While / Do while Loops</title>
</head>
<body>
    <h1>While loop</h1>
    <?php
        $grade = 0;
        // Infinite loop
        // while($grade < 10){
        //    echo '<p>I am less tham 10</p>';
        //}
        // Pre condition loop
        while($grade < 10){
            echo '<p>I am less tham 10</p>';
            $grade++;
        }
        echo 'Exit loop';
    ?>

    <h1>Do While loop</h1>
    <?php
        // Post condition loop
        $grade = 0;
        do{
            echo '<p>I am do while loop</p>';
            $grade++;
        }while($grade < 10);
        echo 'Exit loop';
    ?>
    
</body>
</html>