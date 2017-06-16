<?php
namespace App\Controller ;
/**
 * RpipController short summary.
 *
 * RpipController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class RpipController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("reporting.pip.index",compact('UserInfo'));
	}


}
