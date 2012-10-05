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
 * Controller for the Project object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Showcase_Controller_ProjectController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * projectRepository
	 * 
	 * @var Tx_Showcase_Domain_Repository_ProjectRepository
	 */
	protected $projectRepository;

	/**
	 * categoryRepository
	 * 
	 * @var Tx_Showcase_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->projectRepository = t3lib_div::makeInstance('Tx_Showcase_Domain_Repository_ProjectRepository');
		$this->categoryRepository = t3lib_div::makeInstance('Tx_Showcase_Domain_Repository_CategoryRepository');
	}
	
	
		
	/**
	 * Displays all Projects
	 *
	 * @return string The rendered list view
	 */
	public function listAction() {
//		$projects = $this->projectRepository->findProjects($this->settings['startingpoint']);
//		$this->view->assign('projects', $projects);
		$categories = $this->categoryRepository->findByPid($this->settings['startingpoint']);
		$this->view->assign('black', $this->settings['black']);
		$this->view->assign('categories', $categories);
	}

	/**
	 * Displays a single Project
	 *
	 * @param Tx_Showcase_Domain_Model_Project $project the Project to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Showcase_Domain_Model_Project $project) {
		$categories = $this->categoryRepository->findByPid($this->settings['startingpoint']);
		$this->view->assign('black', $this->settings['black']);
		$this->view->assign('categories', $categories);
		$this->view->assign('project', $project);
	}

	/**
	 * Displays a single Media
	 *
	 * @param Tx_Showcase_Domain_Model_Project $project the Project to display
	 * @param Tx_Showcase_Domain_Model_Media $media the Project to display 
	 * @return string The rendered view
	 */
	public function showMediaAction(Tx_Showcase_Domain_Model_Project $project, Tx_Showcase_Domain_Model_Media $media) {
		$categories = $this->categoryRepository->findByPid($this->settings['startingpoint']);
		$this->view->assign('categories', $categories);
		$this->view->assign('project', $project);
		$this->view->assign('selectedMedia', $media);
	}
		
}
?>