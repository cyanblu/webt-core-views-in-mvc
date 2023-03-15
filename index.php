<?php
$entry = file_get_contents('entry.html');
$template = file_get_contents('template.html');

$hotels = array(
    array(
        "name" => "NH Wien Belvedere",
        "desc" => "Schlichtes Hotel mit Lobbybar, Fitnessraum, Sauna und kostenlosem WLAN.",
        "photo" => "https://lh3.googleusercontent.com/gps-proxy/ALm4wwkFtYwBOvkCUDdWRq0pFHtrzrmcxgZzaRzRhSq-lFPb9BKQB5ULKkoVSmvM4RUfUKGKbW_CKz8z4W0X1LghE5PVAWqdkEmUswP8OPq8Q6ZFupndYH_HkeG7P-56rTh5GoI8IWO3Lgh0Iyw5HVXvFOVWihalIDjNSgTQp8yBYkQ6SOgc6RGcvrKB=w408-h273-k-no"
    ),
    array(
        "name" => "Hotel Johann Strauss",
        "desc" => "Gemütliche Zimmer und Suiten in einem prächtigen Jugendstilgebäude mit Bar und kostenlosem Frühstücksbuffet.",
        "photo" => "https://lh5.googleusercontent.com/p/AF1QipNvO07qB3Zk73cOBc1lsMzU5kIKKYNwxPRNFsi6=w408-h306-k-no"
    ),
    array(
        "name" => "Hotel Eurostars Embassy",
        "desc" => "Schlichtes Hotel und extrem cool.",
        "photo" => "https://lh5.googleusercontent.com/p/AF1QipO3J1OZjZKoSCTuIWTwoTWLmkYlmmyCv5FXNS4=w408-h261-k-no"
    )
);
$hotellist = array();

foreach ($hotels as $hotel) {
$temp = str_replace('!!!hotel!!!', $hotel['name'], $entry);
$temp = str_replace('!!!desc!!!', $hotel['desc'], $temp);
$temp = str_replace('!!!pic!!!', $hotel['photo'], $temp);
$hotellist[] = $temp;
}
$result= str_replace('!!!hotelEntries!!!', implode('',$hotellist), $template);

echo $result;