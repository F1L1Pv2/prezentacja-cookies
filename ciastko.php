<?php
$cozrobic = $_GET['cozrobic'];
$wartosc = $_GET['wartosc'];

$cookie_name = "user";

if ($cozrobic == "ustaw") {
    setcookie($cookie_name, $wartosc, time() + (86400 * 30), "/"); // 86400 = 1 day
}

if ($cozrobic == "usun") {
    setcookie($cookie_name, "", time() - 3600, "/");
}

//come back to index.php

header("Location: index.php");