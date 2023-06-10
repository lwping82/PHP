<!DOCTYPE html>
<html>
<body>

<?php 

$counter = 1;

while($counter < 10) {
    echo $counter."<br/>";
    $counter++;
}

echo "<br/>";

$counter = 1;

do {
    echo $counter."<br/>";
    $counter++;
} while($counter < 10);

echo "<br/>";

for($x = 0; $x < 10; $x++) {
    echo $x."<br/>";
}

echo "<br/>";

$colors = array("Red", "Yellow", "Blue");

foreach($colors as $color) {
    echo $color."<br/>";
}
?>

</body>

</html>