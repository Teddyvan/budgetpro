<?php
namespace App\Controller ;
/**
 * RsuiviController short summary.
 *
 * RsuiviController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class RsuiviController extends AppController
{

	public function __construct()
	{
		parent::__construct();
	//	$this->loadModel("");
	}

	public function index()
	{
		$UserInfo = array("username"=>"Bessin","fonction"=>"Ivan") ;
		$this->render("reporting.suivi.index",compact('UserInfo'));
	}


}
