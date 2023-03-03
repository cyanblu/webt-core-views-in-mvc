<?php
$entry = file_get_contents('entry.html');
$template = file_get_contents('template.html');

$hotels = array(
    array(
        "name" => "NH Wien Belvedere",
        "desc" => "Schlichtes Hotel mit Lobbybar, Fitnessraum, Sauna und kostenlosem WLAN.",
        "photo" => "https://lh3.googleusercontent.com/gps-proxy/ALm4wwnWppt4v_EdCcAiObhG6bcC5sRyq6x6ekzB9lFiqT-qzvJmwaKcyNxXJdsjO0zi2uXbyRW4K5Pdb5GAckQbrpTxm5xc7iz_cXpiqbV1L-Wzgkq612poayRctRRf1Cca9WLL2ieEeSLsssheVZYk0hke3b30QbsFT0BfD-6P6tCnINgu6OuzRsYY=w408-h273-k-no"
    ),
    array(
        "name" => "Hotel Johann Strauss",
        "desc" => "Gemütliche Zimmer und Suiten in einem prächtigen Jugendstilgebäude mit Bar und kostenlosem Frühstücksbuffet.",
        "photo" => "https://lh3.googleusercontent.com/gps-proxy/ALm4wwnYsGtFq7XAd1tahXx-GxcNlnwEhimGEqDMTrzH4pk94cvXHHcShaeb9JViPARW0PD0DgSYPg-QMsiOFB-Ept0vldjZgO0HF-wxZksLmmE-nfmcfTrj78JneyHe3VW4jFpZvtAh3N_etMYDfyvPIdoqav2QnGkmdS5oq_vD_YF0mNxBKaFBpiHjWA=w408-h612-k-no"
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