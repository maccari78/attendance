<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - SWITCH statement</title>
</head>
<body>
    <h1>SWITCH statements</h1>
    <?php
        $grade = 'X';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">You are a SUPERSTAR</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">You did well!</h2>';
                break;  
            default:
                echo '<h2 style="color: red">You have FAILED</h2>';
                break; 
        }
    ?>
</body>
</html>