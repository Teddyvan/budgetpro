<?php
namespace App\Model ;

class Annee extends \Core\Database\Api
{
    public function __construct()
    {
        parent::__construct("article");
    }

    public function getAll()
    {

        return $this->recuperer();
    }

}
?>
