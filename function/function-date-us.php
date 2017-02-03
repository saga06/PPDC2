<?php

/* Configure le script en Américain */
setlocale (LC_TIME, 'us_US','usa');
//Définit le décalage horaire par défaut de toutes les fonctions date/heure
date_default_timezone_set("America/New_York");
//Definit l'encodage interne
mb_internal_encoding("UTF-8");
//Convertir une date US en françcais
function dateUs($dateUs){
return strftime('%Y, %m, %d',strtotime($dateUs));
}

 ?>
