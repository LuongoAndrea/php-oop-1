<?php
include_once __DIR__ . '/models/movie.php';
$rick = new Movie("rick", "2016/12/26", "frenck", "/img/filmRick");
$morti = new Movie("morti", "2016/12/26", "paolo", "/img/filmMorti");
echo Movie::saluto();
var_dump($rick);
var_dump($morti);
echo "<br>" . $morti->getGenere();
?>