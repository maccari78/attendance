<?php 
    $title = "Switch statement";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
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
    <?php require 'includes/footer.php' ?>