<?php
require "../models/data.php";

// Fonction pour aller chercher les datas de action

function createAction($data)
{
    
    foreach ($data["action"] as $action) {





        echo '<a href="#" class="article">';
        echo    '<div class="img"><img src="../assets/img/article/action/' . $action["image"] . '" alt="manga' . $action["title"] . '" class=""></div>';
        echo    '<div class="text">';
        echo        '<h2>' . $action["title"] . '</h2>';
        echo        '<ul>';
        echo        '<li><u>Auteur :</u><br>' . $action["auteur"] . '</li>';
        echo        '<li><u>Date de sortie :</u><br>' . $action["date de sortie"] . '</li>';
        echo        '<li><u>Tome :</u><br>' . $action["tome"] . '</li>';
        echo        '<li class="resume"><u>Résumé :</u><br>' . $action["resume"] . '</li>';
        echo   '</ul>';
        echo    '</div>';
        echo '</a>';
    }
}

include "../views/action.php";