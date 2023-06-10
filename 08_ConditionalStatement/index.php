<!DOCTYPE html>
<html>
<body>
<?php 

$totalSells = 100;

if($totalSells < 50) {
    echo "Business is not good";
} else if($totalSells > 50 && $totalSells <= 100) {
    echo "Business is good";
} else {
    echo "Business is exceptionally good";
}

echo "<br/>";

switch ($totalSells) {
    case $totalSells<50:
        echo "Business is not good";
        break;
    case $totalSells>50 && $totalSells<=100:
        echo "Business is good";
        break;
    default:
        echo "Business is exceptionally good";
}


?>

</body>

</html>