<?php
    $title = "Index";
    include 'includes/header.php'
?>
    <!-- Basic HTML (Ctrl+KC) -->
    
    <h1><?php echo $title ?></h1>
    <h1>Hello world from HTML5</h1>
    <br/>
    <?php
        // Printing to HTML using echo
        echo 'Hello PHP!';
        // You can echo HTML tags
        echo '<br/>';
        echo 'second line from PHP';
        echo '<br/>';
    
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
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com/" target="_blank" class="btn btn-danger">Heroku</a>
    <?php require 'includes/footer.php' ?>