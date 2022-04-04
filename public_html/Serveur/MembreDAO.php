<?php 
require_once  "Serveur/BDD.php";

class MembreDAO{
    public static function autentifier($membre){
        $MESSAGE_SQL_AUTENTIFIER_MEMBRE = "SELECT id,pseudo,mdp FROM utilisateur WHERE pseudo=:pseudo";
        $requeteAutentifierMembre= BaseDeDonnees::getConnexion() ->prepare($MESSAGE_SQL_AUTENTIFIER_MEMBRE);
        $requeteAutentifierMembre-> bindParam(':pseudo',$membre["pseudo"],PDO::PARAM_STR);
        $requeteAutentifierMembre->execute();
        $membreAuthentifier = $requeteAutentifierMembre -> fetch();
        if(password_verify($membre["mdp"],$membreAuthentifier["mdp"])){
            return $membreAuthentifier;
        }else{
            return $membre;
        }
    }
    public static function inscription($membreInscriptionValeur){
        $hashOptions = [
            'cost' => 10,
        ];
        $MESSAGE_SQL_INSCRIPTION = "INSERT INTO utilisateur (prenom,date_de_naissance,pseudo,mail,mdp) VALUES (:prenom,:date_de_naissance,:pseudo,:mail,:mdp)";
        $requeteInscription = BaseDeDonnees::getConnexion() -> prepare($MESSAGE_SQL_INSCRIPTION);
        
        $hash = password_hash($membreInscriptionValeur['mdp'], PASSWORD_BCRYPT, $hashOptions);

        $requeteInscription->bindParam(':prenom', $membreInscriptionValeur['prenom'], PDO::PARAM_STR);
        $requeteInscription->bindParam(':date_de_naissance', $membreInscriptionValeur['date_de_naissance'], PDO::PARAM_STR);
        $requeteInscription->bindParam(':pseudo', $membreInscriptionValeur['pseudo'], PDO::PARAM_STR);
        $requeteInscription->bindParam(':mail', $membreInscriptionValeur['mail'], PDO::PARAM_STR);
        $requeteInscription->bindParam(':mdp',$hash , PDO::PARAM_STR);


        return $requeteInscription-> execute();
    }
    public static function recupererUtilisateur($id){
        $id= filter_input(INPUT_GET, 'id' , FILTER_VALIDATE_INT);

        $MESSAGE_SQL_MEMBRE = "SELECT * FROM `membre` WHERE id=:id";
        
        $requeteMembre= BaseDeDonnees::getConnexion() ->prepare($MESSAGE_SQL_MEMBRE);
        $requeteMembre-> bindParam(':id',$id,PDO::PARAM_INT);
        $requeteMembre->execute();
        return $requeteMembre -> fetch();
    }

}
?>