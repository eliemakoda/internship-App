<?php
class DatabaseQuery
{
    public $host =  "localhost";
    public $database = "eneo"; //nom de la base de données 
    public $password = "";  //  mot de passe utilisateur 
    public $user = "root"; // nom d'utilisateur 
    public $lien_connexion;
    //connexion à la base de données
    public function __construct()
    {
        $this->connecter();
    }
    public function connecter()
    {
        $this->lien_connexion =  new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8", $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        if (!$this->lien_connexion) {
            echo "erreur de connexion à la base de données";
        }
    }
    public function SelectionnerTout($requete)
    {
        $ligne = $this->lien_connexion->query($requete);
        $ligne->execute();
        $resultat = $ligne->fetchAll(PDO::FETCH_OBJ);
        if ($resultat) {
            return $resultat;
        } else {
            return false;
        }
    }
    //lecture d'un élément de la base de données
    public function SelectionnerUn($requete)
    {
        $ligne = $this->lien_connexion->query($requete);
        $ligne->execute();
        $resultat = $ligne->fetch(PDO::FETCH_OBJ);
        if ($resultat) {
            return $resultat;
        } else {
            return false;
        }
    }
    public function inserer($requete, $tableau_donnee, $destination)
    {

        $insert = $this->lien_connexion->prepare($requete);
        $insert->execute($tableau_donnee);
        header("location: " . $destination . "");
    }
    public function insert($requete, $tableau_donnee)
    {

        $insert = $this->lien_connexion->prepare($requete);
        $insert->execute($tableau_donnee);
    }

    //supprimer les éléments de la base de données
    public function supprimer($requete, $destination)
    {
        $sup = $this->lien_connexion->query($requete);
        $sup->execute();
        header("location: " . $destination . "");
    }

    public function maj($req, $destination)
    {
        $ligne = $this->lien_connexion->prepare($req);
        $ligne->execute();
        header("location: " . $destination . "");
    }
    public function se_connecter_admin($requete, $tableau_donnee, $destination)
    {
        $tab = ['emailAdmin' => $tableau_donnee['emailAdmin']];
        $connection_user =  $this->lien_connexion->prepare($requete);
        $connection_user->execute($tab);
        $resultat = $connection_user->fetch(PDO::FETCH_ASSOC);
        if ($connection_user->rowCount() > 0) {
            if (password_verify($tableau_donnee['passwordAdmin'], $resultat['passwordAdmin'])) {
                //début des sessions
                // (`IdAdmin`, `nomAdmin`, `emailAdmin`, `passwordAdmin`, `DateAjoutAdmin`)
                session_start();
                $_SESSION['IdAdmin'] = $resultat['IdAdmin'];
                $_SESSION['nomAdmin'] = $resultat['nomAdmin'];
                $_SESSION['emailAdmin'] = $resultat['emailAdmin'];
                $_SESSION['passwordAdmin'] = $resultat['passwordAdmin'];
                $_SESSION['DateAjoutAdmin'] = $resultat['DateAjoutAdmin'];

                header("location: " . $destination . "");
            } else {
                echo "mauvais mot de passe";
            }
        } else {
            echo "aucune adresse mail correspondante";
        }
    }
// `user`(`idUser`, `nomUser`, `emailUser`, `passwordUser`, `dateAjoutUser`, `TelephoneUser`)
    public function se_connecter_client($requete, $tableau_donnee, $destination)
    {
        $tab = ["emailUser" => $tableau_donnee['emailUser']];
        $connection_user =  $this->lien_connexion->prepare($requete);
        $connection_user->execute($tab);
        $resultat = $connection_user->fetch(PDO::FETCH_ASSOC);
        if ($connection_user->rowCount() > 0) {
            if (password_verify($tableau_donnee['passwordUser'], $resultat['passwordUser'])) {
                //début des sessions
                session_start();
                $_SESSION['idUser'] = $resultat['idUser'];
                $_SESSION['nomUser'] = $resultat['nomUser'];
                $_SESSION['emailUser'] = $resultat['emailUser'];
                $_SESSION['passwordUser'] = $resultat['passwordUser'];
                $_SESSION['dateAjoutUser'] = $resultat['dateAjoutUser'];
                $_SESSION['TelephoneUser'] = $resultat['TelephoneUser'];
                // $_SESSION['DateAjoutUser'] = $resultat['DateAjoutUser'];

                header("location: " . $destination . "");
            } else {
                echo "mauvais mot de passe";
            }
        } else {
            echo "aucune adresse mail correspondante";
        }
    }
    public function debut_session()
    {
        session_start();
    }
}
