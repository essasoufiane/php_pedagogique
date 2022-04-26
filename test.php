
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>test</title>
    </head>
    <body>
    <?php require_once "repoData.php"; ?>
<h1>
<?php echo $home ?>
</h1>

<ul>
    <li>Titre :<?php echo $valo["title"] ?></li>
    <li>Editeur :<?php echo $valo["editor"] ?></li>
    <li>Categorie :<?php echo $valo["category"] ?></li>
    <li>Joueurs :<?php echo $valo["nb_players"] ?></li>
</ul>

    
</body>
</html>
