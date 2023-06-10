<!DOCTYPE html>

<html>

<body>

<?php 

function counter() {
    static $total = 0;
    $total++;
    echo $total."<br/>";
}

for($x=0; $x<4;$x++) {
    counter();
}
?>

</body>
</html>
