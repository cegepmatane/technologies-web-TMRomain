<?php 
require_once  "Serveur/BDD.php";

class ForumDAO{
    public static function ajouter($poste){
        $MESSAGE_SQL_AJOUT = "INSERT INTO poste (titre,description,utilisateur,date) VALUES (:titre,:description,:utilisateur,:date)";
        $requeteAjout = BaseDeDonnees::getConnexion() -> prepare($MESSAGE_SQL_AJOUT);

        $requeteAjout->bindParam(':titre', $poste['titre'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':description', $poste['description'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':utilisateur', $poste['utilisateur'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':date', $poste['date'], PDO::PARAM_STR);
        return $requeteAjout-> execute();
    }
}
?>