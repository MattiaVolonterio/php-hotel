<?php

require_once __DIR__ . "/../data/data.php";

$parking_filter = isset($_GET["parking-select"]) ? true : false;
$vote_filter = $_GET["hotel-vote"] ?? false;

if ($parking_filter)
    $hotels = array_filter($hotels, fn($hotel) => $hotel['parking']);

if ($vote_filter)
    $hotels = array_filter($hotels, fn($hotel) => $hotel['vote'] >= $vote_filter);