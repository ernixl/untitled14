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
    $x = 1;

    while ($x <= 7) {
        echo "$x buy specs<br>"; $x++;
    }; while ($x > 7 and $x <= 20) {
        echo "$x buy bread<br>"; $x++;
    }

    ?>
</P>
</body>
</html>