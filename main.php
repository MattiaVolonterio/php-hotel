<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

$filter_selected = !empty($_GET);

$filtered_hotels = [];

if ($filter_selected) {
    // $parking_filter = $_GET["parking-select"] === 'true' ? true : false;
    $parking_filter = $_GET["parking-select"];

    if ($parking_filter == "true") {
        $filter_value = true;
    } elseif ($parking_filter == "false") {
        $filter_value = false;
    } else {
        $filter_value = "all";
    };

    $vote_filter = $_GET["hotel-vote"];

    foreach ($hotels as $hotel) {
        if ($hotel["parking"] === $filter_value && $hotel["vote"] >= $vote_filter || $hotel["parking"] === $filter_value && $vote_filter == "all" || $filter_value == "all" && $hotel["vote"] >= $vote_filter) {
            $filtered_hotels[] = $hotel;
        } elseif ($parking_filter == "all" && $vote_filter == "all") {
            $filtered_hotels = $hotels;
        }
    };
} else {
    $filtered_hotels = $hotels;
};
