<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - IF statement</title>
</head>
<body>
    <h1>IF statements</h1>
    <?php 
        // An IF statement that will carry out an action based on the value of the variable
        echo '<h2>IF statement</h2>';

        $grade = 80;
        // ===, ==, <, >, <=, >=
        if($grade >= 50){
            echo '<h3 style="color: green">You have PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">You have FAILED</h3>';
        }
        $grade = 'C';
        // IF - ELSE IF - ELSE
        if($grade == 'A'){
            echo '<h2 style="color: green">You are a SUPERSTAR</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue">You did well!</h2>';
        }
        else{
            echo '<h2 style="color: red">You have FAILED</h2>';
        }
    ?>    
</body>
</html>