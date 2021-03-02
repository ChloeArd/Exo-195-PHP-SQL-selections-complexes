<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>
<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.

require "Classes/DB.php";

$bdd = DB::getInstance();

/* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
echo "1. Affichez tous les utilisateurs dont le nom est 'Conor'";
$stmt = $bdd->prepare("SELECT * from user WHERE nom = 'Conor'");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 2. Affichez tous les utilisateurs dont le prénom est différent de 'John'";

/* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
$stmt = $bdd->prepare("SELECT * from user WHERE prenom != 'John'");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 3. Affichez tous les utilisateurs dont l'id est plus petit ou égal à 2";

/* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
$stmt = $bdd->prepare("SELECT * from user WHERE id <= 2");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 4. Affichez tous les utilisateurs dont l'id est plus grand ou égal à 2";

/* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
$stmt = $bdd->prepare("SELECT * from user WHERE id >= 2 ");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 5. Affichez tous les utilisateurs dont l'id est égal à 1";

/* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
$stmt = $bdd->prepare("SELECT * from user WHERE id = 1");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 6. Affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe'";

/* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
$stmt = $bdd->prepare("SELECT * from user WHERE id > 1 AND nom = 'Doe' ");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 7. Affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'";

/* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
$stmt = $bdd->prepare("SELECT * from user WHERE nom = 'Doe' AND prenom = 'John'");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 8. Affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane'";

/* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
$stmt = $bdd->prepare("SELECT * from user WHERE nom = 'Conor' OR prenom = 'Jane'");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 9. Affichez tous les utilisateurs en limitant les réultats à 2 résultats";

/* 9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats */
$stmt = $bdd->prepare("SELECT * from user LIMIT 2");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 10. Affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement";

/* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement */
$stmt = $bdd->prepare("SELECT * from user ORDER BY id ASC LIMIT 1");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 11. Affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères";

/* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )*/
$stmt = $bdd->prepare("SELECT * from user WHERE nom LIKE 'C___r'");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 12. Affichez tous les utilisateurs dont le nom contient au moins un 'e'";

/* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
$stmt = $bdd->prepare("SELECT * from user WHERE nom LIKE '%e%'");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 13. Affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah)";

/* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' */
$stmt = $bdd->prepare("SELECT * from user WHERE prenom IN ('John', 'Sarah')");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br> 14. Affichez tous les utilisateurs dont l'id est situé entre 2 et 4";

/* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
$stmt = $bdd->prepare("SELECT * from user WHERE id BETWEEN 2 AND 4");

$state = $stmt->execute();

if ($state) {
    foreach ($stmt -> fetchAll() as $user) {
        echo "<div class='classe-css-utilisateur'>
                        Utilisateur " . $user['id'] . ", données ( " . $user['nom'] . ", " . $user['prenom'] . ", " . $user['rue'] . ", " . $user['numero'] . ", " . $user['code_postal'] . ", " . $user['ville'] . ", " . $user['pays'] . ", " . $user['mail'] . ")"
            . "</div>";
    }
}

echo "<br><br>";
