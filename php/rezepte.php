<?php



function datenAbrufen(){
    $db = new PDO("mysql:host=localhost; dbname=rezepteeingeben", 'root', '');
    $sql = 'SELECT * FROM rezept';
    
    $statement = $db->query($sql);
    $rezepte = $statement->fetchAll();
    foreach ($rezepte as $rezept) {
        echo '<div class="card">';
            echo '<img src="../img/vorspeisen.jpg" alt="" class="img-fluid">';
            echo '<h4 class="titelcard">' . $rezept['art'] . '</h4>';
            echo 'Schwierigkeit <h4 class="titelcard">' . $rezept['schwierigkeit'] . '</h4>';
            echo 'Kategorie <h4 class="titelcard">' . $rezept['kategorie'] . '</h4>';
            echo 'Name <h4 class="titelcard">' . $rezept['name'] . '</h4>';
            echo 'Zutaten <h4 class="titelcard">' . $rezept['zutaten'] . '</h4>';
            echo 'Beschreibung <h4 class="titelcard">' . $rezept['beschreibung'] . '</h4>';
        echo '</div>';
    }
}

?>