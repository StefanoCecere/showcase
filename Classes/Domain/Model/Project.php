<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Stefano Cecere <stefano.cecere@krur.com>, KRUR
*  	
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
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
 * Project
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Showcase_Domain_Model_Project extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string $title
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * date
	 *
	 * @var DateTime $date
	 */
	protected $date;

	/**
	 * description
	 *
	 * @var string $description
	 */
	protected $description;

	/**
	 * archived
	 *
	 * @var boolean $archived
	 */
	protected $archived;
	/**
	 * image
	 *
	 * @var string $image
	 * @validate NotEmpty
	 */
	protected $image;
	/**
	 * media
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Media> $media
	 */
	protected $media;

	/**
	 * categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Category> $categories
	 */
	protected $categories;

	/**
	 * The constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->media = new Tx_Extbase_Persistence_ObjectStorage();
		$this->categories = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Setter for title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Setter for date
	 *
	 * @param DateTime $date date
	 * @return void
	 */
	public function setDate(DateTime $date) {
		$this->date = $date;
	}

	/**
	 * Getter for date
	 *
	 * @return DateTime date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Setter for description
	 *
	 * @param string $description description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Getter for description
	 *
	 * @return string description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Setter for media
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Media> $media media
	 * @return void
	 */
	public function setMedia(Tx_Extbase_Persistence_ObjectStorage $media) {
		$this->media = $media;
	}

	/**
	 * Getter for media
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Media> media
	 */
	public function getMedia() {
		return $this->media;
	}

	/**
	 * Setter for categories
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Category> $categories categories
	 * @return void
	 */
	public function setCategories(Tx_Extbase_Persistence_ObjectStorage $categories) {
		$this->categories = $categories;
	}

	/**
	 * Getter for categories
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Category> categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Setter for image
	 *
	 * @param string $image image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Getter for image
	 *
	 * @return string image
	 */
	public function getImage() {
		return $this->image;
	}
}
?>