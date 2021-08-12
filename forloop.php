<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - FOR LOOP</title>
</head>
<body>
    <h1>FOR loops</h1>
    <?php 
        // FOR loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD!</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>
</body>
</html>