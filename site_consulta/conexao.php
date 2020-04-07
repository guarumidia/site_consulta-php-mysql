<?php

$link = mysqli_connect("localhost", "dompau67_daniel", "jhb42cj5", "dompau67_busca");
mysqli_set_charset($link,'utf8');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

