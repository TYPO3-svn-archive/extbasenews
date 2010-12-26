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
 * Controller for the News object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Extbasenews_Controller_NewsController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_Extbasenews_Domain_Repository_NewsRepository
	 */
	protected $newsRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->newsRepository = t3lib_div::makeInstance('Tx_Extbasenews_Domain_Repository_NewsRepository');
	}
	/**
	 * Displays all News
	 */
	public function indexAction() {
		$news = $this->newsRepository->findAll();
        $this->view->assign('news', $news);
	}

	/**
	 * Displays a single News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News $news the News to display
	 */
	public function showAction(Tx_Extbasenews_Domain_Model_News $news) {
		$this->view->assign('news', $news);
	}

	/**
	 * Displays a form for creating a new News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News $newNews a fresh News object taken as a basis for the rendering
	 * @dontvalidate $newNews
	 */
	public function newAction(Tx_Extbasenews_Domain_Model_News $newNews = NULL) {
		$this->view->assign('newNews', $newNews);
	}

	/**
	 * Creates a new News and forwards to the index action.
	 *
	 * @param Tx_Extbasenews_Domain_Model_News $newNews a fresh News object which has not yet been added to the repository
	 */
	public function createAction(Tx_Extbasenews_Domain_Model_News $newNews) {
		$this->newsRepository->add($newNews);
		$this->flashMessageContainer->add('Your new News was created.');
		$this->redirect('index');
	}

	/**
	 * Displays a form to edit an existing News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News $news the News to display
	 * @dontvalidate $news
	 */
	public function editAction(Tx_Extbasenews_Domain_Model_News $news) {
		$this->view->assign('news', $news);
	}

	/**
	 * Updates an existing News and forwards to the index action afterwards.
	 *
	 * @param Tx_Extbasenews_Domain_Model_News $news the News to display
	 */
	public function updateAction(Tx_Extbasenews_Domain_Model_News $news) {
		$this->newsRepository->update($news);
		$this->flashMessageContainer->add('Your News was updated.');
		$this->redirect('index');
	}

	/**
	 * Deletes an existing News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News $news the News to be deleted
	 */
	public function deleteAction(Tx_Extbasenews_Domain_Model_News $news) {
		$this->newsRepository->remove($news);
		$this->flashMessageContainer->add('Your News was removed.');
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
