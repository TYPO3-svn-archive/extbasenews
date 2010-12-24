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
 * a news entry
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Extbasenews_Domain_Model_News extends Tx_Extbase_DomainObject_AbstractEntity {


    /**
     * the type (e.g. normal, internal, external)
     * @var int
     * @validate NotEmpty
     */
    protected $type;
    
	/**
	 * the title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * the subtitle
	 * @var string
	 */
	protected $subtitle;
	
	/**
	 * a longer version of a subtitle
	 * @var string
	 */
	protected $teaser;
	
	/**
	 * the main content of the news entry
	 * @var string
	 */
	protected $bodytext;
	
	/**
	 * references to other websites
	 * @var string
	 */
	protected $links;
	
	/**
	 * the date the news entry relates to
	 * @var integer
	 */
	protected $datetime;
	
	/**
	 * the date until the news entry shall be shown
	 * @var integer
	 */
	protected $archiveDate;
	
	/**
	 * the name of the news author(s)
	 * @var string
	 */
	protected $authorName;
	
	/**
	 * the email address(es) of the news author
	 * @var string
	 */
	protected $authorEmail;
	
	/**
	 * the URL of the image(s)
	 * @var string
	 */
	protected $imageUrl;
	
	/**
	 * the caption used for the image(s)
	 * @var string
	 */
	protected $imageCaption;
	
	/**
	 * the alt-text used for the image(s)
	 * @var string
	 */
	protected $imageAltText;
	
	/**
	 * the title-text used for the image(s)
	 * @var string
	 */
	protected $imageTitleText;
	
	/**
	 * the url of the file(s)
	 * @var string
	 */
	protected $fileUrl;
	
	/**
	 * the title used for the file(s)
	 * @var string
	 */
	protected $fileTitle;
	
	/**
	 * the caption used for the file(s)
	 * @var string
	 */
	protected $fileCaption;
	
	/**
	 * parent
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_News>
	 */
	protected $parent;
	
	/**
	 * category
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_Categorie>
	 */
	protected $category;
	
	/**
	 * relatedNews
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_News>
	 */
	protected $relatedNews;

	/**
	 * The constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->parent = new Tx_Extbase_Persistence_ObjectStorage();
	}

    /**
     * Setter for type
     *
     * @param  int $type the type
     * @return Tx_Extbasenews_Domain_Model_News
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Getter for type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

	/**
	 * Setter for title
	 *
	 * @param string $title the title
	 * @return Tx_Extbasenews_Domain_Model_News
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
	 * Setter for subtitle
	 *
	 * @param string $subtitle the subtitle
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
		return $this;
	}

	/**
	 * Getter for subtitle
	 *
	 * @return string the subtitle
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}
	
	/**
	 * Setter for teaser
	 *
	 * @param string $teaser a longer version of a subtitle
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setTeaser($teaser) {
		$this->teaser = $teaser;
		return $this;
	}

	/**
	 * Getter for teaser
	 *
	 * @return string a longer version of a subtitle
	 */
	public function getTeaser() {
		return $this->teaser;
	}
	
	/**
	 * Setter for bodytext
	 *
	 * @param string $bodytext the main content of the news entry
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
		return $this;
	}

	/**
	 * Getter for bodytext
	 *
	 * @return string the main content of the news entry
	 */
	public function getBodytext() {
		return $this->bodytext;
	}
	
	/**
	 * Setter for links
	 *
	 * @param string $links references to other websites
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setLinks($links) {
		$this->links = $links;
		return $this;
	}

	/**
	 * Getter for links
	 *
	 * @return string references to other websites
	 */
	public function getLinks() {
		return $this->links;
	}
	
	/**
	 * Setter for date
	 *
	 * @param integer $date the date the news entry relates to
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setDatetime($datetime) {
		$this->datetime = $datetime;
		return $this;
	}

	/**
	 * Getter for date
	 *
	 * @return integer the date the news entry relates to
	 */
	public function getDatetime() {
		return $this->datetime;
	}
	
	/**
	 * Setter for archiveDate
	 *
	 * @param integer $archiveDate the date until the news entry shall be shown
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setArchiveDate($archiveDate) {
		$this->archiveDate = $archiveDate;
		return $this;
	}

	/**
	 * Getter for archiveDate
	 *
	 * @return integer the date until the news entry shall be shown
	 */
	public function getArchiveDate() {
		return $this->archiveDate;
	}
	
	/**
	 * Setter for authorName
	 *
	 * @param string $authorName the name of the news author(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setAuthorName($authorName) {
		$this->authorName = $authorName;
		return $this;
	}

	/**
	 * Getter for authorName
	 *
	 * @return string the name of the news author(s)
	 */
	public function getAuthorName() {
		return $this->authorName;
	}
	
	/**
	 * Setter for authorEmail
	 *
	 * @param string $authorEmail the email address(es) of the news author
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setAuthorEmail($authorEmail) {
		$this->authorEmail = $authorEmail;
		return $this;
	}

	/**
	 * Getter for authorEmail
	 *
	 * @return string the email address(es) of the news author
	 */
	public function getAuthorEmail() {
		return $this->authorEmail;
	}
	
	/**
	 * Setter for imageUrl
	 *
	 * @param string $imageUrl the URL of the image(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setImageUrl($imageUrl) {
		$this->imageUrl = $imageUrl;
		return $this;
	}

	/**
	 * Getter for imageUrl
	 *
	 * @return string the URL of the image(s)
	 */
	public function getImageUrl() {
		return $this->imageUrl;
	}
	
	/**
	 * Setter for imageCaption
	 *
	 * @param string $imageCaption the caption used for the image(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setImageCaption($imageCaption) {
		$this->imageCaption = $imageCaption;
		return $this;
	}

	/**
	 * Getter for imageCaption
	 *
	 * @return string the caption used for the image(s)
	 */
	public function getImageCaption() {
		return $this->imageCaption;
	}
	
	/**
	 * Setter for imageAltText
	 *
	 * @param string $imageAltText the alt-text used for the image(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setImageAltText($imageAltText) {
		$this->imageAltText = $imageAltText;
		return $this;
	}

	/**
	 * Getter for imageAltText
	 *
	 * @return string the alt-text used for the image(s)
	 */
	public function getImageAltText() {
		return $this->imageAltText;
	}
	
	/**
	 * Setter for imageTitleText
	 *
	 * @param string $imageTitleText the title-text used for the image(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setImageTitleText($imageTitleText) {
		$this->imageTitleText = $imageTitleText;
		return $this;
	}

	/**
	 * Getter for imageTitleText
	 *
	 * @return string the title-text used for the image(s)
	 */
	public function getImageTitleText() {
		return $this->imageTitleText;
	}
	
	/**
	 * Setter for fileUrl
	 *
	 * @param string $fileUrl the url of the file(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setFileUrl($fileUrl) {
		$this->fileUrl = $fileUrl;
		return $this;
	}

	/**
	 * Getter for fileUrl
	 *
	 * @return string the url of the file(s)
	 */
	public function getFileUrl() {
		return $this->fileUrl;
	}
	
	/**
	 * Setter for fileTitle
	 *
	 * @param string $fileTitle the title used for the file(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setFileTitle($fileTitle) {
		$this->fileTitle = $fileTitle;
		return $this;
	}

	/**
	 * Getter for fileTitle
	 *
	 * @return string the title used for the file(s)
	 */
	public function getFileTitle() {
		return $this->fileTitle;
	}
	
	/**
	 * Setter for fileCaption
	 *
	 * @param string $fileCaption the caption used for the file(s)
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setFileCaption($fileCaption) {
		$this->fileCaption = $fileCaption;
		return $this;
	}

	/**
	 * Getter for fileCaption
	 *
	 * @return string the caption used for the file(s)
	 */
	public function getFileCaption() {
		return $this->fileCaption;
	}
	
	/**
	 * Setter for parent
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_News> $parent parent
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setParent(Tx_Extbase_Persistence_ObjectStorage $parent) {
		$this->parent = $parent;
		return $this;
	}

	/**
	 * Getter for parent
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_News> parent
	 */
	public function getParent() {
		return $this->parent;
	}
	
	/**
	 * Adds a News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News the News to be added
	 * @return void
	 */
	public function addParent(Tx_Extbasenews_Domain_Model_News $parent) {
		$this->parent->attach($parent);
	}
	
	/**
	 * Removes a News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News the News to be removed
	 * @return void
	 */
	public function removeParent(Tx_Extbasenews_Domain_Model_News $parent) {
		$this->parent->detach($parent);
	}
	
	/**
	 * Setter for category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_Categorie> $category category
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
		return $this;
	}

	/**
	 * Getter for category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_Categorie> category
	 */
	public function getCategory() {
		return $this->category;
	}
	
	/**
	 * Adds a Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie the Categorie to be added
	 * @return void
	 */
	public function addCategory(Tx_Extbasenews_Domain_Model_Categorie $category) {
		$this->category->attach($category);
	}
	
	/**
	 * Removes a Categorie
	 *
	 * @param Tx_Extbasenews_Domain_Model_Categorie the Categorie to be removed
	 * @return void
	 */
	public function removeCategory(Tx_Extbasenews_Domain_Model_Categorie $category) {
		$this->category->detach($category);
	}
	
	/**
	 * Setter for relatedNews
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_News> $relatedNews relatedNews
	 * @return Tx_Extbasenews_Domain_Model_News
	 */
	public function setRelatedNews(Tx_Extbase_Persistence_ObjectStorage $relatedNews) {
		$this->relatedNews = $relatedNews;
		return $this;
	}

	/**
	 * Getter for relatedNews
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Extbasenews_Domain_Model_News> relatedNews
	 */
	public function getRelatedNews() {
		return $this->relatedNews;
	}
	
	/**
	 * Adds a News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News the News to be added
	 * @return void
	 */
	public function addRelatedNews(Tx_Extbasenews_Domain_Model_News $relatedNews) {
		$this->relatedNews->attach($relatedNews);
	}
	
	/**
	 * Removes a News
	 *
	 * @param Tx_Extbasenews_Domain_Model_News the News to be removed
	 * @return void
	 */
	public function removeRelatedNews(Tx_Extbasenews_Domain_Model_News $relatedNews) {
		$this->relatedNews->detach($relatedNews);
	}

}
?>