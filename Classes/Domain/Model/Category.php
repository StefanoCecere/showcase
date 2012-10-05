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
 * Category
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Showcase_Domain_Model_Category extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string $title
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * $invisible
	 *
	 * @var integer $invisible
	 */
	protected $invisible;
	
	/**
	 * projects
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Project> $projects
	 */
	protected $projects;	

	/**
	 * The constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->projects = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Setter for invisible
	 *
	 * @param boolean $invisible invisible
	 * @return void
	 */
	public function setInvisible($invisible) {
		$this->invisible = $invisible;
	}

	/**
	 * Getter for invisible
	 *
	 * @return boolean $invisible
	 */
	public function getInvisible() {
		return $this->invisible;
	}
	
	/**
	 * Setter for projects
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Project> $projects projects
	 * @return void
	 */
	public function setProjects(Tx_Extbase_Persistence_ObjectStorage $projects) {
		$this->projects = $projects;
	}

	/**
	 * Getter for projects
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Showcase_Domain_Model_Project> projects
	 */
	public function getProjects() {
		return $this->projects;
	}	
}
?>