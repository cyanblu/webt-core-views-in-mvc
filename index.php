<?php
$entry = file_get_contents('entry.html');
$template = file_get_contents('template.html');

$hotels = array(
    array(
        "name" => "NH Wien Belvedere",
        "desc" => "Schlichtes Hotel mit Lobbybar, Fitnessraum, Sauna und kostenlosem WLAN."
    ),
    array(
        "name" => "Hotel Johann Strauss",
        "desc" => "Gemütliche Zimmer und Suiten in einem prächtigen Jugendstilgebäude mit Bar und kostenlosem Frühstücksbuffet."
    ),
    array(
        "name" => "Hotel Eurostars Embassy",
        "desc" => "Hotel Eurostars Embassy."
    )
);
$hotellist = array();

foreach ($hotels as $hotel) {
$temp = str_replace('!!!hotel!!!', $hotel['name'], $entry);
$temp = str_replace('!!!desc!!!', $hotel['desc'], $temp);
$hotellist[] = $temp;
}
$result= str_replace('!!!hotelEntries!!!', implode(" ",$hotellist), $template);

echo $result;