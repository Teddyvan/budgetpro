<?php
namespace App\Controller ;
/**
 * UtilisateurController short summary.
 *
 * UtilisateurController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class MailController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Utilisateur");
	}
	public function index()
	{
		$post = array('salut','bonojour');
		$this->render("administration.mailbox.index",compact('post' ));
	}


}
