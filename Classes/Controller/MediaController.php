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
 * Controller for the Media object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Showcase_Controller_MediaController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * mediaRepository
	 * 
	 * @var Tx_Showcase_Domain_Repository_MediaRepository
	 */
	protected $mediaRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->mediaRepository = t3lib_div::makeInstance('Tx_Showcase_Domain_Repository_MediaRepository');
	}
	
	
		
	/**
	 * Displays all Medias
	 *
	 * @return string The rendered list view
	 */
	public function listAction() {
		$media = $this->mediaRepository->findAll();
		$this->view->assign('media', $media);
	}
	
	
	/**
	 * Displays all Medias
	 *
	 * @return string The rendered list view
	 */
	public function showreelAction() {
		$mediashowreel = $this->mediaRepository->findShowreel();
		$this->view->assign('mediashowreel', $mediashowreel);
	}

	/**
	 * Displays a single Media
	 *
	 * @param Tx_Showcase_Domain_Model_Media $media the Media to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Showcase_Domain_Model_Media $media) {
		$this->view->assign('media', $media);
	}

}
?>