<!DOCTYPE html>
<html>
<body>
<?php 
# indexed arrays
$colors = array("Red", "Yellow", "Blue");
echo $colors[2]."<br/>";

foreach($colors as $color) {
    echo $color."<br/>";
}

# associative arrays
$workingExperience = array("David"=>10,"Macron"=>21);
echo $workingExperience['Macron']."<br/>";

foreach($workingExperience as $person=>$value) {
    echo $person," has ",$value," working experience<br/>";
}

?>

</body>

</html>