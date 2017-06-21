<?php
namespace App\Controller ;
use \App\Model\Annee ;
require_once ROOT.'unirest/src/Unirest.php';
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
		$data=array("id"=>1,"jeu"=>"games of trone");
		$response = $this->Annee->getAll($data);
		$this->render("administration.annee.index",compact('response'));
	}

}
