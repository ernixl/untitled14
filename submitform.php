<?php
/**
 * Created by PhpStorm.
 * User: ernes
 * Date: 07/04/2017
 * Time: 07:30
 */
    echo "<br>";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    if ($firstname=="ernest" and $lastname =="brai")
    echo "welcome {$firstname} {$lastname}! click <A HREF=randompage.php>here</A>to continue";


    else echo "wrong login credentials please check your login details and try again";