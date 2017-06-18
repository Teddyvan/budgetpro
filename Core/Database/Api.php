<?php
namespace Core\Database ;
require_once ROOT.'unirest\src\Unirest.php';
use Unirest\Request as Request;
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

    public function send($data= array())
    {

    }

    public function recuperer()
    {
        $response = Request::get(URL_BASE.'t.json', null, null, 'username', 'password');
        if($response->code ===200)
        {
            return $response->body ;
        }
    }
}