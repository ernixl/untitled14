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
    echo "hello {$firstname} {$lastname}! how are you today";

    else echo "wrong user";