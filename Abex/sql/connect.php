<?php

$con = new mysqli('localhost', 'root', '', 'abexiv');

if(!$con) {
    die(mysqli_error($con));
}   
?>