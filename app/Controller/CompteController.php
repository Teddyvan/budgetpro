<?php
namespace App\Controller ;
/**
 * FichierController short summary.
 *
 * FichierController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class CompteController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("administration.compte.index",compact('UserInfo'));
	}


}
