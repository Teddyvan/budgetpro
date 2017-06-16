<?php
namespace App\Controller ;
/**
 * AnneeController short summary.
 *
 * AnneeController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class AnneeController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Annee");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("administration.annee.index",compact('UserInfo'));
	}


}
