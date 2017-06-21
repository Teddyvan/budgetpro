<?php
namespace App\Controller ;
/**
 *
 * ProgrammeController Gere les Action du programme.
 *
 * @version 1.0
 * @author Utilisateur
 */
class ProgrammeController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Nomenclature");
	}
	
	public function index()
	{
		$this->render("gestion.planification.programme.index");
	}
}