<?php
namespace App\Controller ;
use \App\Model\Utilisateur;
/**
 * UtilisateurController short summary.
 *
 * UtilisateurController description.
 *
 * @version 1.0
 * @author Utilisateur
 */
class UtilisateurController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Utilisateur");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("administration.utilisateurs.index",compact('UserInfo'));
	}

	public function profil()
	{
		  $UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
			$this->render("administration.utilisateurs.profile",compact('UserInfo'));
	}

	public function details()
	{

	}
/**
*Affiche le formulaire de connexion
*/
	public function login()
	{
        //si l'utilisateur est deja connecté on le redirige vers la page d'acceuil
        //on verifie l'existe de la variable session['budgPro']
        if($this->existSession("budgPro"))
        {
            //la variable existe il est connecté
            $this->template = 'admin' ;
            $this->render("administration.utilisateurs.index");
        }
        elseif(isset($_POST['connexion']))
        {
           // $this->connexion();
            $user = array();
            $user =  $this->clean($_POST);
            $this->utilisateur->connexion($json);
        }
        else
        {
            //la variable n'existe pas il n'est pas connecté
            $this->template = 'connexion' ;
            $this->render("administration.utilisateurs.login");
        }
	}

}
