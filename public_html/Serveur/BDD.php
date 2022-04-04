<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class BaseDeDonnees{
public static function getConnexion(){
    $usager = 'root';
    $motdepasse = 'Youtube97421';
    $hote = 'localhost';
    $base = 'sitedev';
    
    $dsn = 'mysql:dbname='.$base.';host=' . $hote;
    $connexion = new PDO($dsn,$usager,$motdepasse);
    return $connexion;
}
}

?>