<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Here is a webpage containing php</h1>
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
    $modules = Array("Web Dev", "Programming", "Professional
Skillz");
    echo $modules[0]
    ?>
</p>

<form action="submitform.php" method="post">
    <input type="text" placeholder="First Name" name="firstname">
    <input type="text" placeholder="Last Name" name="lastname">
    <input type="submit" value="Go">
</form>
<p>
    <?
    $t = date("D");
    if ($t < 10) {
        echo "buy tea";
    } else {
        echo "forget it";
    }
    ?>
</p>
<P>
    <?php
    $x = 16;

    while ($x > 16 and $x <=18) {
        echo "$x buy specs<br>"; $x++;
    }; while ($x > 18 and $x <= 21) {
        echo "$x buy mugs<br>"; $x++;
    }while ($x > 21){echo " buy sausage rolls";}

    ?>
</P>
</body>
</html>