<?php
namespace App\Controller ;
/**
 * GplanificationController short summary.
 *
 * GplanificationController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class GplanificationController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("gestion.planification.index",compact('UserInfo'));
	}


}
