<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Here is a webpage containing php mmmm</h1>
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
<p>
    <?php

    $wantedgoods = "specs";
    switch ($wantedgoods) {
        case specs:
            echo "1 sad hobbit";
            break;
        case mugs:
            echo "2 happy hobbits";
            break;
        case sausage:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }

    ?>
</p>

<p>
    <?php
    $v = 1;
    while ($v <= 1) {
        echo "$v no products are available<br>";
        $v++;
    };
    while ($v <= 31) {
        echo "$v specs are available<br>";
        $v+=2;
    };
    while ($v <= 31) {
        echo "$v mugs are available<br>";
        $v+=3;
    };
    while ($v <= 31) {
        echo "$v specs and sausage rolls are available<br>";
        $v+=4;
    };
    ?>
</p>
</body>
</html>