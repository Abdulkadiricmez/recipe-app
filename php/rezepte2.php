
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | Schöne Rezepte</title>

    <link rel="stylesheet" href="../css/rezepte2.css">
    <script src="https://kit.fontawesome.com/fdf8cb2b60.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "../php/rezepte.php" ?>

   <section id="menu"> 
    <div id="logo">Tolle Rezepte</div>
    <nav>

        <a href="../html/Rezepte-Webseite.html"><i class="fa-solid fa-house ikon"></i>Homepage</a>
        <a href="rezepte.php"><i class="fa-solid fa-bowl-food ikon"></i></i></i>Rezepte</a>
        <a href=""><i class="fa-solid fa-info ikon"></i>Über uns</a>
        <a href=""><i class="fa-sharp fa-solid fa-location-pin ikon"></i></i>Kontakt</a>
    </nav>

   </section> 
    
   <section id="Rezepte">
        <div class="container">
            <h3>Rezepte</h3>

                <div class="card">
                    <?php datenAbrufen(); ?>
                </div>

        </div>
   </section>
</body>
</html>