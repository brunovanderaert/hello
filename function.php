<?php
function getAllannonces() {
    $data =[
        "annonce1" => ["voiture",1000] ,
        "annonce2" => ["meuble",55]
    ];
    return $data;
}

function getFirstAnnonce (){
    $first = current(getAllannonces());
    return $first;
}

function insertAnnonce($libelle, $tab)
{
    $data = getAllannonces();
    $data[$libelle] = $tab;
    return $data;
}
?>