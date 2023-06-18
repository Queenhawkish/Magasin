<?php
require "../models/data.php";

function createRomance($data)
{
    
    foreach ($data["romance"] as $romance) {





        echo '<a href="#" class="article">';
        echo    '<div class="img"><img src="../assets/img/article/romance/' . $romance["image"] . '" alt="manga' . $romance["title"] . '" class=""></div>';
        echo    '<div class="text">';
        echo        '<h2>' . $romance["title"] . '</h2>';
        echo        '<ul>';
        echo        '<li><u>Auteur :</u><br>' . $romance["auteur"] . '</li>';
        echo        '<li><u>Date de sortie :</u><br>' . $romance["date de sortie"] . '</li>';
        echo        '<li><u>Tome :</u><br>' . $romance["tome"] . '</li>';
        echo        '<li class="resume"><u>Résumé :</u><br>' . $romance["resume"] . '</li>';
        echo   '</ul>';
        echo    '</div>';
        echo '</a>';
    }
}

include "../views/romance.php";