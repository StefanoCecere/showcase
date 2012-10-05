<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$ll = 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:';

$TCA['tx_showcase_domain_model_project'] = array(
	'ctrl' => $TCA['tx_showcase_domain_model_project']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'title,description,categories',
	),
	'types' => array(
		'0' => array('showitem'	=> 'title,description,image,categories,
			--div--;Media,media'),
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
				'foreign_table' => 'tx_showcase_domain_model_project',
				'foreign_table_where' => 'AND tx_showcase_domain_model_project.uid=###REC_FIELD_l10n_parent### AND tx_showcase_domain_model_project.sys_language_uid IN (-1,0)',
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
		'title' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.title',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'date' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.date',
			'config'	=> array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'date',
				'default' => time()
			),
		),
		'description' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.description',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 20,
				'eval' => 'trim'
			),
		),
		'archived' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.archived',
			'config'	=> array(
				'type' => 'check',
				'default' => 0
			),
		),
		'container' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.container',
			'config'	=> array(
				'type' => 'check',
				'default' => 0
			),
		),
		'media' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.media',
			'config'	=> array(
				'type' => 'inline',
				'foreign_table' => 'tx_showcase_domain_model_media',
				'foreign_field' => 'project',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'category' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.category',
			'config'	=> array(
				'type' => 'select',
				'items' => array(
					array('---', 0)
				),
				'foreign_table' => 'tx_showcase_domain_model_category',
				'foreign_table_where' => ' AND tx_showcase_domain_model_category.pid = ###CURRENT_PID### AND tx_showcase_domain_model_category.hidden = 0 ORDER BY tx_showcase_domain_model_category.sorting',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1
			),
		),
		'categories' => array(
			'exclude' => 0,
			'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.category',
			'config' => array(
				'type' => 'select',
				'MM' => 'tx_showcase_mm_project_category',
				'foreign_table' => 'tx_showcase_domain_model_category',
				'foreign_table_where' => '  AND tx_showcase_domain_model_category.pid = ###CURRENT_PID### AND tx_showcase_domain_model_category.hidden = 0 ORDER BY tx_showcase_domain_model_category.sorting',
				'size' => 15,
				'autoSizeMax' => 40,
				'minitems' => 1,
				'maxitems' => 1,
			),
		),		
		'image' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
				'uploadfolder' => 'uploads/showcase/project/',
				'show_thumbs' => 1,
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'parent' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.parent',
			'config'	=> array(
				'type' => 'select',
				'foreign_table' => 'tx_showcase_domain_model_project',
				'foreign_table_where' => ' AND tx_showcase_domain_model_project.pid = ###CURRENT_PID### AND tx_showcase_domain_model_project.uid != ###THIS_UID### AND tx_showcase_domain_model_project.container = 1',
				'renderMode' => 'tree',
				'subType' => 'db',
				'treeConfig' => array(
					'parentField' => 'parent',
					'appearance' => array(
						'expandAll' => TRUE,
						'showHeader' => FALSE,
					),
				),
				'size' => 10,
				'autoSizeMax' => 10,
				'minitems' => 0,
				'maxitems' => 3
			),
		),
	),
);
?>