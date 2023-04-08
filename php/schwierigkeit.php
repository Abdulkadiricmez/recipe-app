<?php

$name = $_POST['name'];
$art = $_POST['art'];
$zutaten = $_POST['zutaten'];
$beschreibung = $_POST['beschreibung'];

$zutaten_array = explode(',', $zutaten);
$anzahl_zutaten = count($zutaten_array);
$schwierigkeit = berechneschwierigkeit($anzahl_zutaten);
$kategorie = ermittlekategorie($schwierigkeit);


dateneintragen($name, $art, $zutaten, $beschreibung, $schwierigkeit, $kategorie);

function dateneintragen($name, $art, $zutaten, $beschreibung, $schwierigkeit, $kategorie){
    $db = new PDO("mysql:host=localhost; dbname=rezepteeingeben", 'root', '');
    $sql = 'INSERT INTO rezept(name, art, zutaten, beschreibung, schwierigkeit, kategorie) 
    VALUES(:name, :art, :zutaten, :beschreibung, :schwierigkeit, :kategorie)';
    $daten = array(
        'name' => $name,
        'art' => $art,
        'zutaten' =>$zutaten,
        'beschreibung' =>$beschreibung,
        'schwierigkeit' =>$schwierigkeit,
        'kategorie' =>$kategorie
    );
    $statement = $db->prepare($sql);
    $statement->execute($daten);
    echo 'Vielen Dank für Ihre Unterstützung' ;
    header ('Location: ../php/rezepte2.php');
}


function berechneschwierigkeit($anzahl_zutaten){
    if ($anzahl_zutaten < 5) {
        $schwierigkeit = 'Einfach';
    } elseif ($anzahl_zutaten < 10) {
        $schwierigkeit = 'Mittel';
    } else {
        $schwierigkeit = 'Schwer';
    }
    return $schwierigkeit;
}

function ermittlekategorie($schwierigkeit){
    if ($schwierigkeit == 'einfach') {
        $kategorie = '1';
    } elseif ($schwierigkeit == 'mittel') {
        $kategorie = '2';
    } else {
        $kategorie = '3';
    }
    return $kategorie;
}

?>
