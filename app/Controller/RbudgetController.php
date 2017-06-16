<?php
namespace App\Controller ;
/**
 * RbudgetController short summary.
 *
 * RbudgetController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class RbudgetController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("reporting.budget.index",compact('UserInfo'));
	}


}
