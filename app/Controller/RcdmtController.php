<?php
namespace App\Controller ;
/**
 * RcdmtController short summary.
 *
 * RcdmtController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class RcdmtController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("reporting.cdmt.index",compact('UserInfo'));
	}


}
