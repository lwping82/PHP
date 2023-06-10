<!DOCTYPE html>
<html>
<body>

<?php 
# param 1 = constant name
# param 2 = value
define("AUTHOR", "William Shakespeare");

# array constant only supported in PHP 7 and above
define("COLORS",["Red", "Yellow", "Blue"]);

function printAuthor() {
    echo AUTHOR."<br/>";
}

function printColor() {
    foreach(COLORS as $color) {
        echo $color."<br/>";
    }
}

printAuthor();
printColor();
?>

</body>

</html>