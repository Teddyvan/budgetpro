<?php
namespace App\Controller ;
/**
 *
 * ActiviteController Gere les Action du activite.
 *
 * @version 1.0
 * @author Utilisateur
 */
class ActiviteController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Nomenclature");
	}
	
	public function index()
	{
		$this->render("gestion.planification.activite.index");
	}
}