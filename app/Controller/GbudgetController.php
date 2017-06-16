<?php
namespace App\Controller ;
/**
 * GbudgetController short summary.
 *
 * GbudgetController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class GbudgetController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("gestion.budget.index",compact('UserInfo'));
	}


}
