<?php
namespace App\Controller ;
use \App\Model\Annee ;
require_once ROOT.'unirest\src\Unirest.php';
use Unirest\Request as Request;
/**
 * AnneeController short summary.
 *
 * AnneeController description.
 *
 * @version 1.0
 * @author Bessin Ivan
 */
class AnneeController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Annee");
	}

	public function index()
	{

		$response = $this->Annee->getAll();
		$this->render("administration.annee.index",compact('response'));
	}


}
