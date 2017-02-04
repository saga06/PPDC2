<?php
include_once('connection.php'); // connexion avec la base de données

class User
{
    private $_db; //base de donnée
    public $error; //si oui ou non y a une erreur
    private $_email; //var email
    private $_password; //var mot de passe

    public function __construct()
    {
      // construct pour créer une connexion avec la base de donnée via un connection::dbConnect();
      $this->_db = Connection::dbConnect();
    }

    public function __get($name){
      // pour recupérer les infos utilisateurs avec $name
      return $this->$name;
    }

    public function Login($email, $password) // funtion pour se connecter avec l'email et le mot de passe correspondant
    {

        if (!empty($email) && !empty($password)) // verifie si les entrées ne sont pas vides
        {
            $st = $this->_db->prepare("SELECT * FROM `users_infos` WHERE email=? and password=?");
            $st->bindParam(1, $email);
            $st->bindParam(2,$password);
            $st->execute();

            // verifie que le mot de passe correspond à l'email
            if ($st->rowCount() == 1) {
                $triuc = $st->fetch();
                $this->_email = $triuc['email'];


                // pour la création du nom, prenom, nv_droits dans le topScreen
                $_SESSION['nom'] = $triuc['nom'];
                $_SESSION['prenom'] = $triuc['prenom'];
                $_SESSION['statut'] = $triuc['statut'];

                $this->_password = $triuc['password'];
                $this->error = "Utilisateur vérifié, accès authorisé";
                header('Location: interface-liste-utilisateur.php');
                exit;
            }

            else //si le mot de passe ou l'email ne correspond pas
            {
                $this->error  = '<div class="alert alert-danger" role="alert">
                                <strong>Erreur</strong></br>
                                Login ou mot de passe incorrect
                                </div>';
            }
        }

        else //si l'une des entrées est vide
        {
            $this->error = '<div class="alert alert-danger" role="alert">
                            <strong>Erreur</strong></br>
                            Veuillez renseigner les deux champs
                            </div>';
        }
    } //fermeture function login


    public function Listage() // permet de préparer la liste des utilisateurs en reprennant leurs données dans users_infos
    {
      $st = $this->_db->prepare("SELECT * FROM `users_infos`");
      $st->execute();
      return $st->fetchall();
    }
}
