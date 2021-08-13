<?php 
    $title = "String manipulation";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php
        $phrase1 = "Student who came late";
        $phrase2 = "in class stand with ROCK";
        $name = "danilo maccari";
        // Concatenation of strings
        echo $phrase1 . ", named Tiffany, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';
        // String transformation
        echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br/>';
        echo 'Upper case: ' . strtoupper($name) . '<br/>';
        echo 'Lower case: ' . strtolower("THIS WAS ALL UPPER CASE") . '<br/>';
        echo '<hr/>';
        echo 'Repeat string: ' . str_repeat('a ', 10) . '<br/>';
        echo 'Repeat string: ' . strtoupper(str_repeat('a ', 10)) . '<br/>';
        echo 'Get a substring: ' . substr($name, 3, 5) . '<br/>';

        echo 'Get position of string: ' . strpos($name, 'm') . '<br/>'; 
        // Returns NULL
        // echo 'Get position of string' . strpos($combine, 'z') . '<br/>';
        echo 'Find caracter "R": ' . strchr($name, 'R') . '<br/>';
        echo 'Find caracter "r": ' . strchr($name, 'r') . '<br/>';
        echo 'Find caracter "n": ' . strchr($name, 'n') . '<br/>';
        echo 'Find caracter "o": ' . strchr($name, 'o') . '<br/>';

        echo 'Find length of string: ' . strlen($name) . '<br/>';

        echo 'Without TRIM: ' . "A" . " B C D " . "E" . '<br/>';
        echo 'TRIM spaces of both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'TRIM spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'TRIM spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';
    ?>
    <?php require 'includes/footer.php' ?>