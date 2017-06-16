<?php
namespace App\Controller ;
/**
 * GsuiviController short summary.
 *
 * GsuiviController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class GsuiviController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("gestion.suivi.index",compact('UserInfo'));
	}


}
