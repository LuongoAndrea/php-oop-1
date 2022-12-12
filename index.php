<?php
include_once __DIR__ . '/models/movie.php';
$rick = new Movie("rick", "2016/12/26", "frenck", "/img/filmRick");
var_dump($rick);
?>