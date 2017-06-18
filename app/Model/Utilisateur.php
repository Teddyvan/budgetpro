<?php
/**
 * Summary of namespace App\Model
 * Model Utilisateur
 */
namespace App\Model ;
require_once ROOT.'/unirest/src/Unirest.php';
use Unirest\Request as Request;
class Utilisateur
{
   /* public function __construct()
    {
        parent::__construct("article");
    }*/

    public function connexion($data)
    {
        $headers = array('Accept' => 'application/json');
        $body = json_encode($data);
        return $body ;
        $response = Request::post(URL_BASE, $headers, $body) ;

        if($response->code === 200)
        {
            return $response->body ;
        }
    }

}
?>