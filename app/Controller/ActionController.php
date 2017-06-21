<?php
namespace App\Controller ;
/**
 *
 * ActionController Gere les Action des actions.
 *
 * @version 1.0
 * @author Utilisateur
 */
class ActionController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Nomenclature");
	}
	
	public function index()
	{
		$this->render("gestion.planification.action.index");
	}
}