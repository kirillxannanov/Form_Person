<?php

$connect = mysqli_connect('localhost','root','','form_db');
if (!$connect) {
    die("Error". mysqli_connect_error());
}


