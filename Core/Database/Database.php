<?php
namespace Core\Database;
use \PDO ;
/**
 * CLass fournissant l'acces a la base de données.
 */
class Database
{
	private $db_host;
	private $db_name;
	private $db_user ;
	private $db_pass;
	private $pdo ;

	public function __construct($db_name,$db_user="root",$db_pass="",$db_host= "localhost")
	{
		$this->db_host = $db_host ;
		$this->db_name = $db_name ;
		$this->db_user = $db_user ;
		$this->db_pass = $db_pass ;
	}

	/**
	 *
	 * Retourne une instance de la base donnée
	 * @return PDO
	 */
	private function getPDO()
	{
		if($this->pdo === null )
		{
			$pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host,$this->db_user,$this->db_pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo ;
		}
		return $this->pdo ;
	}

	//methode CRUD insert ,update
	public function query ($statement,$class_name)
	{

		$req =  $this->getPDO()->query($statement);
		$data = $req->fetchAll(PDO::FETCH_CLASS,$class_name);
		return $data ;
	}

	public function prepare ($statement,$attributes,$class_name,$one = false)
	{

		$req =  $this->getPDO()->prepare($statement);
		$req->execute($attributes);
		$req->setFetchMode(PDO::FETCH_CLASS,$class_name );
		if($one)
			$data = $req->fetch() ;

		else
			$data = $req->fetchAll();

		return $data ;
	}
}
?>