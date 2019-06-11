<?php
$server = "localhost";
$user = "root";
$password = "";
$dBase = "basename";
$link = mysqli_connect($server,$user,$password);
mysqli_select_db($link,$dBase);
mysqli_query($link,"SET NAMES utf8");
