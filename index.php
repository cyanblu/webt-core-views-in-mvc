<?php
$entry = file_get_contents('entry.html');
$template = file_get_contents('template.html');

$hotels = array(
    array(
        "name" => "NH Wien Belvedere",
        "desc" => "Schlichtes Hotel mit Lobbybar, Fitnessraum, Sauna und kostenlosem WLAN.",
        "photo" => "https://lh3.googleusercontent.com/gps-proxy/ALm4wwkPd_dWjKXKlb6eH0QwQvEdzYGRh1-dz0Q0li05q47VC9H8yY8PAQxf6vN3EHE6aCldUCIghCzyEt4QmeAKPmon8Vbc0hJpLdasgrKg0KjlthxgB-OdGWUnr8c-a1XOrQDmh1UxUXp7DDDxTRPxphMsbZIN3AZMPD6pfA5u9UPYKIFWetKKykah=w408-h273-k-no"
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