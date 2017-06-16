<?php
namespace App\Controller ;
/**
 * SauvegardeController short summary.
 *
 * SauvegardeController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class SauvegardeController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("administration.sauvegarde.index",compact('UserInfo'));
	}


}
