<?php
namespace App\Model ;

class Annee extends \Core\Database\Api
{
    public function __construct()
    {
        parent::__construct("article");
    }

    public function getAll($data)
    {

       try
		{
			$data = array("email"=>"mon@email.com","pass"=>"pass");
			return $this->getconnexion($data);
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
    }

}
?>
