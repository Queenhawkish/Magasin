<?php
require "../models/data.php";

function createSf($data)
{
    
    foreach ($data["science fiction"] as $sf) {





        echo '<a href="#" class="article">';
        echo    '<div class="img"><img src="../assets/img/article/science_fiction/' . $sf["image"] . '" alt="manga' . $sf["title"] . '" class=""></div>';
        echo    '<div class="text">';
        echo        '<h2>' . $sf["title"] . '</h2>';
        echo        '<ul>';
        echo        '<li><u>Auteur :</u><br>' . $sf["auteur"] . '</li>';
        echo        '<li><u>Date de sortie :</u><br>' . $sf["date de sortie"] . '</li>';
        echo        '<li><u>Tome :</u><br>' . $sf["tome"] . '</li>';
        echo        '<li class="resume"><u>Résumé :</u><br>' . $sf["resume"] . '</li>';
        echo   '</ul>';
        echo    '</div>';
        echo '</a>';
    }
}

include "../views/sf.php";