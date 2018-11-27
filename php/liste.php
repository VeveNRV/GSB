<?php
    //Récupère le fichier bdd
    include 'connexionBDD.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

    <body>

    <section class="list">  
        <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rôle</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">E-mail</th>
                <th scope="col">Mot de passe</th>
            </tr>
        </thead>
        
    </section>  

    </body>
</html>

<?php

    // Récupération des données de la table utilisateur
    $reponse = $bdd ->query('SELECT * FROM utilisateur)');

    //Boucle pour Parcourir tous les champs de la table utilisateur
    while($donnees = $reponse -> fetch())
    {
        echo "<tr>".
                "<td>" .$donnees['id']. "</td>".
                "<td>" .$donnees['role']. "</td>".
                "<td>" .$donnees['nom']. "</td>".
                "<td>" .$donnees['prenom']. "</td>".
                "<td>" .$donnees['email']. "</td>".
                "<td>" .$donnees['mdp']. "</td>".
            "</tr>";        
    }

    //Indique quand le traitement est terminé
    $reponse->closeCursor();
?>
    </table>
    </body>
</html>