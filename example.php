<?php

require_once 'connect.php'; // Подключение к базе данных

// Подключение класса

require_once 'sqlsec.php';
$SS = new ss($link);

// Пример метода ss_String

$var = "Hello, world!";

$var = $SS->ss_String($var);


// Пример метода ss_Int

$var2 = "35";

$var2 = $SS->ss_Int($var2);

// Пример метода ss_Int_mm

$var3 = "40";
$var3 = $SS->ss_Int_mm($var3, "0", "10", "1");

// Пример метода ss_HTML

$var = "<script>alert('Hello, world!');</script>";
$var = SS::ss_HTML($var);

// Пример метода ss_Trans

$var = "ТЕКСТ по РУССКИ";
$var = $SS->ss_Trans($var);
