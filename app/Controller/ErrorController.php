<?php
namespace App\Controller ;
/**
 * ErrorController short summary.
 *
 * ErrorController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class ErrorController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Utilisateur");
	}
	public function index()
	{
		$post = array('salut','bonojour');
		$this->render("mailbox.index",compact('post' ));
	}


}
