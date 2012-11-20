<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_showcase_domain_model_category'] = array(
	'ctrl' => $TCA['tx_showcase_domain_model_category']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'title',
	),
	'types' => array(
		'0' => array('showitem'	=> 'main,title,projects'),
		'1' => array('showitem'	=> 'main,title,show_pid,showproject_pid'),
	),
	'palettes' => array(
		'1' => array('showitem'	=> ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude'			=> 1,
			'label'				=> 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config'			=> array(
				'type'					=> 'select',
				'foreign_table'			=> 'sys_language',
				'foreign_table_where'	=> 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			)
		),
		'l10n_parent' => array(
			'displayCond'	=> 'FIELD:sys_language_uid:>:0',
			'exclude'		=> 1,
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.l10n_parent',
			'config'		=> array(
				'type'			=> 'select',
				'items'			=> array(
					array('', 0),
				),
				'foreign_table' => 'tx_showcase_domain_model_category',
				'foreign_table_where' => 'AND tx_showcase_domain_model_category.uid=###REC_FIELD_l10n_parent### AND tx_showcase_domain_model_category.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array(
			'config'		=>array(
				'type'		=>'passthrough',
			)
		),
		't3ver_label' => array(
			'displayCond'	=> 'FIELD:t3ver_label:REQ:true',
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config'		=> array(
				'type'		=>'none',
				'cols'		=> 27,
			)
		),
		'hidden' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
			)
		),
		'main' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_category.main',
			'config'	=> array(
				'type'	=> 'check',
			)
		),
		'title' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_category.title',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'show_pid' => array(
			'exclude' => 0,
			'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_category.show_pid',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'showproject_pid' => array(
			'exclude' => 0,
			'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_category.showproject_pid',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'invisible' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_category.invisible',
			'config'	=> array(
				'type' => 'check',
				'default' => 0
			),
		),
		'projects' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_category.projects',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_showcase_domain_model_project',
				'allowed' => 'tx_showcase_domain_model_project',
				'MM' => 'tx_showcase_mm_project_category',
				'MM_opposite_field' => 'categories',
				'foreign_table_where' => ' AND tx_showcase_domain_model_project.pid = ###CURRENT_PID###',
				'size' => 15,
				'autoSizeMax' => 25,
				'minitems' => 0,
				'maxitems' => 999999,
				
				'disable_controls' => 'upload,browser'
			),
		),
	),
);
?>
