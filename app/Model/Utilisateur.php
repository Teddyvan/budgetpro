<?php
/**
 * Summary of namespace App\Model
 * Model Utilisateur
 */
namespace App\Model ;

class Utilisateur extends \Core\Database\Api
{
    public function __construct()
    {
        parent::__construct("utilisateur");
    }

	//connexion
    public function connexion($data)
    {
		try
		{
			return $this->getconnexion($data);
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
    }
	
	//ajout d'un utilisateur
	public function add($data)
    {
		try
		{
			return $this->addUser($data);
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
    }

}
?>