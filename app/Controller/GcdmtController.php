<?php
namespace App\Controller ;
/**
 * GcdmtController short summary.
 *
 * GcdmtController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class GcdmtController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("gestion.cdmt.index",compact('UserInfo'));
	}


}
