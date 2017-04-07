<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Here is a webpage containing phpextra not</h1>
<p>
<?php
    $x = 5;
    $y = 10;
    $z = $x + $y;
    echo "
    <p>Variable x is set as {$x}</p>
    <p>Variable y is set as {$y}</p>
    <p>x + y is {$z}</p>
    ";
?>
</p>
<p>
<?php
$p = "helloworld";
$q = "hello world";
echo $p;
echo "<br>";
echo $q;
?>
</p>
<p>
    <?php
        $modules = Array("Web Dev","Programming", "Professional
Skillz");
        echo $modules[0]
?>
</p>
<p>
<?php
    $LOCATION = "MYPAGE.PHP?USERNAME=MIKE";
    HEADER($LOCATION);



?>

</p>
</body>
</html>