<?php

$tu = mysqli_connect("localhost", "root", "", "kuras");

if (!$tu) {
die("Error".mysqli_connect_error());
}