<?php
require "../models/data.php";
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
function createNews($data)
{
    // echo "<pre>";
    // var_dump($data["News"]);
    // echo "</pre>";
    foreach ($data["News"] as $news) {





        echo '<a href="#" class="article">';
        echo    '<div class="img"><img src="../assets/img/article/news/' . $news["image"] . '" alt="manga' . $news["title"] . '" class=""></div>';
        echo    '<div class="text">';
        echo        '<h2>' . $news["title"] . '</h2>';
        echo        '<ul>';
        echo        '<li><u>Auteur :</u><br>' . $news["auteur"] . '</li>';
        echo        '<li><u>Date de sortie :</u><br>' . $news["date de sortie"] . '</li>';
        echo        '<li><u>Tome :</u><br>' . $news["tome"] . '</li>';
        echo        '<li class="resume"><u>Résumé :</u><br>' . $news["resume"] . '</li>';
        echo   '</ul>';
        echo    '</div>';
        echo '</a>';
    }
}


include "../views/news.php";
