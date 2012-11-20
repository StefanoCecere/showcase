<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY,'Portfolio','Showcase: portfolio');
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_portfolio'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_portfolio', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_portfolio.xml');

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY,'Showreel','Showcase: showreel');
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_showreel'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_showreel', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_showreel.xml');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Showcase');

// TABLES
t3lib_extMgm::addLLrefForTCAdescr('tx_showcase_domain_model_project', 'EXT:showcase/Resources/Private/Language/locallang_csh_tx_showcase_domain_model_project.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_showcase_domain_model_project');
$TCA['tx_showcase_domain_model_project'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dividers2tabs' => TRUE,
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Project.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_showcase_domain_model_project.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_showcase_domain_model_category', 'EXT:showcase/Resources/Private/Language/locallang_csh_tx_showcase_domain_model_category.xml');
$TCA['tx_showcase_domain_model_category'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_category',
		'label' 			=> 'title',
		'type' => 'main',
		'typeicon_column' => 'main',
		'typeicons' => array (
			'0' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/category_main.gif',
			'1' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/category_sub.gif',
		),
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'default_sortby' => 'ORDER BY sorting',
		'sortby' => 'sorting',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_showcase_domain_model_media', 'EXT:showcase/Resources/Private/Language/locallang_csh_tx_showcase_domain_model_media.xml');
$TCA['tx_showcase_domain_model_media'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'type' => 'type',
		'default_sortby' => 'ORDER BY sorting',
		'sortby' => 'sorting',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l10n_parent',
		'transOrigDiffSourceField' 	=> 'l10n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Media.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_showcase_domain_model_media.gif'
	)
);

?>