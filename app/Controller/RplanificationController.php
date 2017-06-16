<?php
namespace App\Controller ;
/**
 * RplanificationController short summary.
 *
 * RplanificationController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class RplanificationController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("reporting.planification.index",compact('UserInfo'));
	}


}
