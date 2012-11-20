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
 * Repository for Tx_Showcase_Domain_Model_Media
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
 
class Tx_Showcase_Domain_Repository_MediaRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * find all records regardless of their storage page, enable fields or language
	 *
	 * @return array <Tx_Showcase_Domain_Model_Media>
	 */
	public function findShowreel() {
		$query = $this->createQuery();
		
		$constraints = array();
		$constraints[] = $query->equals('highlight', 1);
		$query->matching($query->logicalAnd($constraints));
		//$query->setOrderings(array('category' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));

		$query->getQuerySettings()->
			setRespectStoragePage(false)->
			setRespectEnableFields(TRUE)->
			setRespectSysLanguage(TRUE)
		;

		return $query->execute();
	}

}
?>