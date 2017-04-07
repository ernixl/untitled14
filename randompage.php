<?php
/**
 * Created by PhpStorm.
 * User: ernes
 * Date: 07/04/2017
 * Time: 07:38
 */
$username = $_GET["Username"];

echo $username;

$LOCATION = "randompage.PHP?USERNAME=MIKE";
HEADER($LOCATION);