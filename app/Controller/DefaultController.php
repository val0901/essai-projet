<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function homepage()
	{
		// Au depart, on affiche la page 
		// $this->show('default/homepage');
		// redirection de la page home vers page1
		$this->redirectToRoute('default_page1');
	}

/*methode simple, on pourra plus tard passer plusieurs parametres*/
	public function page1()
	{
		// renvoie à la racine du dossier /Views/
		$this->show('default/page1');

	}

	// chemin vers la page 404
	public function notFound ()
	{
		$this->showNotFound();
	}

	

}