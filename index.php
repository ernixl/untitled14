<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Here is a webpage containing phpextra</h1>
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

<?php
$p = "helloworld";
$q = "hello world";
echo $p;
echo "<br>";
echo $q;
?>
<p>
    <?php
        $modules = array("Web Dev","Programming", "Professional
Skillz");
        echo $modules
?>
</p>
</body>
</html>