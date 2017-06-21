<?php
namespace Core\Database ;
require_once ROOT.'unirest/src/Unirest.php';
use Unirest\Request as Request;
use Unirest\Request\Body as Body;
/**
 * Api short summary.
 *
 * Api description.
 *
 * @version 1.0
 * @author Utilisateur
 */
class Api
{
    protected $domaine;
    protected $_pkey ;
    public function __construct($domaine, $primary_key = 'id')
	{

        $this->_domaine = $domaine;
		$this->_pkey = $primary_key;
	}

	/**
	*Requete d'ajout d'un nouvel utilisateur
	*/
    public function addUser($data= array())
    {
		$headers = array('Accept' => 'application/json');
		$body = Body::json($data);
        $response = Request::post(URL_BASE.'/compte/connexion',$headers,$body);
		return $response;
    }
	
	/**
	*Requete de connexion
	*/
	public function getconnexion($data)
    {
		$headers = array('Accept' => 'application/json');
		$body = Body::json($data);
        $response = Request::post(URL_BASE.'/compte/connexion',$headers,$body);
		return $response;
    }
	
}