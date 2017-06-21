<?php
namespace App\Controller ;
/**
 *
 * TacheController Gere les Action des taches.
 *
 * @version 1.0
 * @author Utilisateur
 */
class TacheController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Nomenclature");
	}
	
	public function index()
	{
		$this->render("gestion.planification.tache.index");
	}
}