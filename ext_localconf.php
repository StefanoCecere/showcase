<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
		$_EXTKEY, 'Portfolio', array(
			'Project' => 'list, show, showMedia', 
			'Category' => 'list, show', 
			'Media' => 'list, show',
		), array(
			'Project' => 'list, show, showMedia', 
			'Category' => 'list, show', 
			'Media' => 'list, show', 
		)
);
?>