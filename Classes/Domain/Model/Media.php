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
 * Media
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Showcase_Domain_Model_Media extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * type
	 *
	 * @var string $type
	 * @validate NotEmpty
	 */
	protected $type;

	/**
	* @var boolean
	*/
	protected $highlight;

	/**
	 * title
	 *
	 * @var string $title
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * title
	 *
	 * @var string $code
	 * @validate NotEmpty
	 */
	protected $code;
	
	/**
	 * description
	 *
	 * @var string $description
	 */
	protected $description;

	/**
	 * image
	 *
	 * @var string $image
	 * @validate NotEmpty
	 */
	protected $image;

	/**
	 * video
	 *
	 * @var string $video
	 */
	protected $video;

	/**
	 * html
	 *
	 * @var string $html
	 */
	protected $html;

	/**
	 * project
	 *
	 * @var Tx_Showcase_Domain_Model_Project $project
	 * @lazy
	 */
	protected $project;

	/**
	 * Setter for type
	 *
	 * @param string $type type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return string type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @return boolean $highlight
	 */
	public function getHighlight() {
		return $this->highlight;
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
	 * Setter for code
	 *
	 * @param string $code code
	 * @return void
	 */
	public function setCode($code) {
		$this->code = $code;
	}

	/**
	 * Getter for code
	 *
	 * @return string code
	 */
	public function getCode() {
		return $this->code;
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

	/**
	 * Setter for video
	 *
	 * @param string $video video
	 * @return void
	 */
	public function setVideo($video) {
		$this->video = $video;
	}

	/**
	 * Getter for video
	 *
	 * @return string video
	 */
	public function getVideo() {
		return $this->video;
	}

	/**
	 * Setter for html
	 *
	 * @param string $html html
	 * @return void
	 */
	public function setHtml($html) {
		$this->html = $html;
	}

	/**
	 * Getter for html
	 *
	 * @return string html
	 */
	public function getHtml() {
		return $this->html;
	}

	/**
	 * @return Tx_Showcase_Domain_Model_Project $project
	 */
	public function getProject() {
		return $this->project;
	}

}
?>