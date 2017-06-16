<?php
namespace App\Controller ;
/**
 *
 * NomenclatureController Gere les interactions avec les pages de la nomenclatures.
 *
 * @version 1.0
 * @author Utilisateur
 */
class NomenclatureController extends AppController
{

	public function __construct()
	{
		parent::__construct();
		$this->loadModel("Nomenclature");
	}

	public function index()
	{

		$this->render("nomenclatures.index",compact('post' , 'categories'));
	}
	/**
	 * Affiche le formulaire de la classificaiton partenaire
	 */
	public function partenaire()
	{

		$this->render("nomenclatures.partenaire",compact('post' , 'categories'));
	}

	public function variable()
	{
			$this->render("nomenclatures.variable");
	}

	public function economique()
	{
			$this->render("nomenclatures.economique");
	}
	/**
	     * Affiche le formulaire de la classificaiton fonctionnelle
	     */

			 public function fonctionnelle()
		 	{
		 			$this->render("nomenclatures.fonctionnelle");
		 	}
	/**
	     * Affiche le formulaire de la classificaiton NUASR
	     */
	    public function NUASR()
	    {

	     $this->render("nomenclatures.NUASR");
	    }
	    /**
	     * Affiche le formulaire de la classificaiton geographique
	     */
	      public function geographique()
	    {

	     $this->render("nomenclatures.geographique");
	    }

	    /**
	     * Affiche le formulaire de la classificaiton administrative
	     */
	      public function administrative()
	    {

	      $this->render("nomenclatures.administrative");
	    }

	     /**
	     * Affiche le formulaire de la classificaiton financement
	     */
	      public function bailleurs()
	    {
	     $this->render("nomenclatures.bailleurs");
	    }

	    /**
	     * Affiche le formulaire de la classificaiton administration
	     */
	    public function administration()
	    {

	      $this->render("nomenclatures.administration");
	    }

	     /**
	     * Affiche le formulaire de la classificaiton personnels
	     */
	    public function personnel()
	    {

	      $this->render("nomenclatures.economique");
	    }

	    /**
	     * Affiche le formulaire de la classificaiton service
	     */
	    public function service()
	    {

	     $this->render("nomenclatures.economique");
	    }

	    /**
	     * Affiche le formulaire de la classificaiton devise
	     */
	    public function devise()
	    {

	      $this->render("nomenclatures.devise");
	    }

	     /**
	     * Affiche le formulaire de la classificaiton cadre strategique
	     */
	    public function strategique()
	    {
	      $this->render("nomenclatures.strategique");
	    }
}
