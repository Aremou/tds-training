<?php

use App\Models\Formation;

if (!function_exists('couleur')) {
    function couleur()
    {
        return "background-color: #01674e";
    }
}

if (!function_exists('couleur_text')) {
    function couleur_text()
    {
        return "color: #01674e";
    }
}

if (!function_exists('formations')) {
    function formations($id_cat)
    {
        $formations = Formation::where('categorie_id', $id_cat)->get();
        return $formations;
    }
}



?>
