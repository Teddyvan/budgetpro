<?php
namespace App\Controller ;
/**
 * GpipController short summary.
 *
 * GpipController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class GpipController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("gestion.pip.index",compact('UserInfo'));
	}


}
