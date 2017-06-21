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

	public function ajouter()
	{
		// $validator = new Validators($_POST);
		// $validator->check('nomProduit', 'required',"nom du produit");
		// $validator->check('qte',   'required','quantite');
		// $validator->check('prix', 'required',"Prix");
		 // $erreur = $this->setAlertDanger(implode('<br>', $erreur));
             // $data=array('erreur'=>$erreur,
					// 'input'=>$_POST
					// );
		// $erreur = array();
		// $erreur= $validator->errors();
		 if($this->existSession("budgetPro"))
        {
			$user = array();
			$user =  $this->post();
			$user = json_encode($user);
			$this->render("administration.utilisateurs.ajouter",compact("user"));
        }
        else
			$this->login();
	}
	
	public function modifier($id)
	{
		
		 if($this->existSession("budgetPro"))
        {
			if(is_int($id))
			{
				$this->render("administration.utilisateurs.ajouter",compact("user"));
			}
			else
			{
				
			}
			
        }
        else
			$this->login();
	}
	public function index($array = null)
	{
		 if($this->existSession("budgetPro"))
        {
            //la variable existe il est connecté
            $this->template = 'admin' ;
            $this->render("administration.utilisateurs.index");
        }
        else
			$this->redirect("Utilisateur/login");		
	}

	/**
	Affichage du profile de l'utilisateur
	*/
	public function profil()
	{
		 if($this->existSession("budgetPro"))
        {
			$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
			$this->render("administration.utilisateurs.profile",compact('UserInfo'));
		}
		else
        $this->redirect("Utilisateur/login");	
		
	}


	/*Connexion via javascript*/
	public function connexion()
	{
			//recupere et nettoie les données
			$user = $this->post();
			// sleep(1);
			if(isset($user))
			{
				if(!empty($user['mail']) && !empty($user['pass']))
				{
					//verifier que les données sont correct ;
					if($user['mail'] == 'mon@email.com' && $user['pass'] == 'pass' )
					{
						//si oui on cree la variable session
						// $this->setSession("budgetPro",$user);
						$success = $this->setAlertSuccess("Tous les champs sont ok");
						$arr = array("etat"=>$success,"erreur"=>0,"lien"=>"index.php?p=Utilisateur/index") ;
					}
					else
					{
						$erreur = $this->setAlertWarning("Identifiant / mot de passe incorrect");
						$arr = array("etat"=>$erreur,"erreur"=>1);
					}
				}
				else
				{
					$erreur = $this->setAlertDanger("Veuillez renseigner tous les champs svp");
					$arr = array("etat"=>$erreur,"erreur"=>1);
				}
				
				$j = json_encode($arr);
				echo $j ;
			}
	}
	/*Connexion via la methode post au cas ou le javascript est off*/
	public function connect()
	{
			//recupere et nettoie les données
			$user = $this->post();
			// sleep(1);
			if(isset($user))
			{
				if(!empty($user['mail']) && !empty($user['pass']))
				{
					//verifier que les données sont correct ;
					if($user['mail'] == 'mon@email.com' && $user['pass'] == 'pass' )
					{
						//si oui on cree la variable session
						// $this->setSession("budgetPro",$user);
						$this->template = 'admin' ;
						$this->render("administration.utilisateurs.index");
					}
					else
					{
						$erreur = $this->setAlertWarning("Identifiant / mot de passe incorrect");
						$this->template = 'connexion' ;
						$this->render("administration.utilisateurs.login",compact("erreur"));
					}
				}
				else
				{
					$erreur = $this->setAlertDanger("Veuillez renseigner tous les champs svp");
					$this->template = 'connexion' ;
					$this->render("administration.utilisateurs.login",compact("erreur"));
				}
			}
			else
				$this->redirect("Utilisateur/login");
	}
/**
*Affiche le formulaire de connexion
*/
	public function login()
	{
        //si l'utilisateur est deja connecté on le redirige vers la page d'acceuil
        //on verifie l'existe de la variable session['budgPro']
        if($this->existSession("budgetPro"))
        {
            //la variable existe il est connecté
            $this->template = 'admin' ;
            $this->render("administration.utilisateurs.index");
        }
        else
        {
            //la variable n'existe pas il n'est pas connecté
            $this->template = 'connexion' ;
            $this->render("administration.utilisateurs.login");
        }
	}
	
	/**
	Deconnexion de l'application
	*/
	public function deconnexion()
	{
		unset($_SESSION);
		$this->redirect("Utilisateur/login");
	}

}
