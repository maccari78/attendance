<?php 
    $title = "While / Do while loop";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
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
    <?php require 'includes/footer.php' ?>