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
 * a category
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Extbasenews_Domain_Model_Categorie extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * the title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * the description
	 * @var string
	 */
	protected $description;
	
	/**
	 * the category image or icon
	 * @var string
	 */
	protected $image;
	
	/**
	 * the page or url the categorie is linked to
	 * @var string
	 */
	protected $shortcut;
	
	/**
	 * the page where news entries of this category will be shown
	 * @var integer
	 */
	protected $singeViewPage;
	
	/**
	 * parent
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_Categorie>
	 */
	protected $parent;
	/**
	 * The constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->parent = new Tx_Extbase_Persistence_ObjectStorage();
	}
	/**
	 * Setter for title
	 *
	 * @param string $title the title
	 * @return Tx_Extbasenews_Domain_Model_Categorie
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * Getter for title
	 *
	 * @return string the title
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for description
	 *
	 * @param string $description the description
	 * @return Tx_Extbasenews_Domain_Model_Categorie
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Getter for description
	 *
	 * @return string the description
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Setter for image
	 *
	 * @param string $image the category image or icon
	 * @return Tx_Extbasenews_Domain_Model_Categorie
	 */
	public function setImage($image) {
		$this->image = $image;
		return $this;
	}

	/**
	 * Getter for image
	 *
	 * @return string the category image or icon
	 */
	public function getImage() {
		return $this->image;
	}
	
	/**
	 * Setter for shortcut
	 *
	 * @param string $shortcut the page or url the categorie is linked to
	 * @return Tx_Extbasenews_Domain_Model_Categorie
	 */
	public function setShortcut($shortcut) {
		$this->shortcut = $shortcut;
		return $this;
	}

	/**
	 * Getter for shortcut
	 *
	 * @return string the page or url the categorie is linked to
	 */
	public function getShortcut() {
		return $this->shortcut;
	}
	
	/**
	 * Setter for singeViewPage
	 *
	 * @param integer $singeViewPage the page where news entries of this category will be shown
	 * @return Tx_Extbasenews_Domain_Model_Categorie
	 */
	public function setSingeViewPage($singeViewPage) {
		$this->singeViewPage = $singeViewPage;
		return $this;
	}

	/**
	 * Getter for singeViewPage
	 *
	 * @return integer the page where news entries of this category will be shown
	 */
	public function getSingeViewPage() {
		return $this->singeViewPage;
	}
	
	/**
	 * Setter for parent
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_Categorie> $parent parent
	 * @return Tx_Extbasenews_Domain_Model_Categorie
	 */
	public function setParent(Tx_Extbase_Persistence_ObjectStorage $parent) {
		$this->parent = $parent;
		return $this;
	}

	/**
	 * Getter for parent
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_Categorie> parent
	 */
	public function getParent() {
		return $this->parent;
	}
	
	/**
	 * Adds a Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie the Categorie to be added
	 * @return void
	 */
	public function addParent(Tx_Extbasenews_Domain_Model_Categorie $parent) {
		$this->parent->attach($parent);
	}
	
	/**
	 * Removes a Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie the Categorie to be removed
	 * @return void
	 */
	public function removeParent(Tx_Extbasenews_Domain_Model_Categorie $parent) {
		$this->parent->detach($parent);
	}
	
}
?>