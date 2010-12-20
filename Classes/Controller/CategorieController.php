<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Philipp Gampe <typo3.dev@philippgampe.info>
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the Categorie object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
// TODO: As your extension matures, you should use Tx_Extbase_MVC_Controller_ActionController as base class, instead of the ScaffoldingController used below.
class Tx_Extbasenews_Controller_CategorieController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_Extbasenews_Domain_Repository_CategorieRepository
	 */
	protected $categorieRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->categorieRepository = t3lib_div::makeInstance('Tx_Extbasenews_Domain_Repository_CategorieRepository');
	}
	/**
	 * Displays all Categories
	 */
	public function indexAction() {
		$categories = $this->categorieRepository->findAll();
		$this->view->assign('categories', $categories);
	}

	/**
	 * Displays a single Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie $categorie the Categorie to display
	 */
	public function showAction(Tx_Extbasenews_Domain_Model_Categorie $categorie) {
		$this->view->assign('categorie', $categorie);
	}

	/**
	 * Displays a form for creating a new Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie $newCategorie a fresh Categorie object taken as a basis for the rendering
	 * @dontvalidate $newCategorie
	 */
	public function newAction(Tx_Extbasenews_Domain_Model_Categorie $newCategorie = NULL) {
		$this->view->assign('newCategorie', $newCategorie);
	}

	/**
	 * Creates a new Categorie and forwards to the index action.
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie $newCategorie a fresh Categorie object which has not yet been added to the repository
	 */
	public function createAction(Tx_Extbasenews_Domain_Model_Categorie $newCategorie) {
		$this->categorieRepository->add($newCategorie);
		$this->flashMessageContainer->add('Your new Categorie was created.');
		$this->redirect('index');
	}

	/**
	 * Displays a form to edit an existing Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie $categorie the Categorie to display
	 * @dontvalidate $categorie
	 */
	public function editAction(Tx_Extbasenews_Domain_Model_Categorie $categorie) {
		$this->view->assign('categorie', $categorie);
	}

	/**
	 * Updates an existing Categorie and forwards to the index action afterwards.
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie $categorie the Categorie to display
	 */
	public function updateAction(Tx_Extbasenews_Domain_Model_Categorie $categorie) {
		$this->categorieRepository->update($categorie);
		$this->flashMessageContainer->add('Your Categorie was updated.');
		$this->redirect('index');
	}

	/**
	 * Deletes an existing Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie $categorie the Categorie to be deleted
	 */
	public function deleteAction(Tx_Extbasenews_Domain_Model_Categorie $categorie) {
		$this->categorieRepository->remove($categorie);
		$this->flashMessageContainer->add('Your Categorie was removed.');
		$this->redirect('index');
	}
	

	
	/**
	 * list action
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {
	}
	
}
?>