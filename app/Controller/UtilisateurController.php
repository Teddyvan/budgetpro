<?php
namespace App\Controller ;
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
		$this->template = 'connexion' ;
		$this->render("administration.utilisateurs.login");
	}

   /*
	 *VErifie si le client est bien autorisé a se connecter
	 */
	private function connexion($identifiant,$password)
	{

	}
	
}
