<?php

//affichage erreur
//error_reporting(E_ALL);
//ini_set('display_errors','On');
/*NOM DE L'application*/
define("APP_NAME","Budget Programme");
define("DOSSIER_PROJET","perfodev/").
define("DOCUMENT_ROOT",$_SERVER['DOCUMENT_ROOT']);
define("HTTP_HOST",$_SERVER['HTTP_HOST']);
define("RACINE",DOCUMENT_ROOT."/".DOSSIER_PROJET);
//utiliser pour acceder au fichier like les images
define('SERVER',"http://".HTTP_HOST."/".DOSSIER_PROJET.'public');
//utiliser pour les liens de menu et du forms
define('SERVERS',"http://".HTTP_HOST."/".DOSSIER_PROJET);
//DATABASE
define('DB_HOST','localhost');
define('DB_NAME','template');
define('DB_USER','root');
define('DB_PASSWORD','');
//RESSOURCES
define("APP_RESSOURCES_PATH",RACINE."ressources/");
define("APP_DOWNLOAD_PATH",APP_RESSOURCES_PATH."download/");
define("APP_UPLOAD_PATH",APP_RESSOURCES_PATH."upload/");
//MENU-LABEL

?>