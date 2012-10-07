<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_showcase_domain_model_media'] = array(
	'ctrl' => $TCA['tx_showcase_domain_model_media']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'type,title',
	),
	'types' => array(
		'1' => array('showitem'	=> 'hidden,project,type,highlight,title,code,date,description,image'),
		'2' => array('showitem'	=> 'hidden,project,type,title,code,date,description,image,video'),
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
				'foreign_table' => 'tx_showcase_domain_model_media',
				'foreign_table_where' => 'AND tx_showcase_domain_model_media.uid=###REC_FIELD_l10n_parent### AND tx_showcase_domain_model_media.sys_language_uid IN (-1,0)',
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
		'type' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.type',
			'config'	=> array(
				'type' => 'select',
				'items' => array(
					array('Image', 1),
					array('Video', 2),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'highlight' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.highlight',
			'config'	=> array(
				'type'	=> 'check',
			)
		),
		'title' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.title',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'code' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.code',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),		
		'description' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.description',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 5,
				'eval' => 'trim'
			),
		),
		'date' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project.date',
			'config'	=> array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'date'
			),
		),
		'image' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
				'uploadfolder' => 'uploads/showcase/media/',
				'show_thumbs' => 1,
				'size' => 1,
				'minitems' => 1,
				'maxitems' => 1,
			)
		),
		'video' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.video',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'html' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_media.html',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 10,
				'eval' => 'trim'
			),
		),
		'project' => array(
			'label'		=> 'LLL:EXT:showcase/Resources/Private/Language/locallang_db.xml:tx_showcase_domain_model_project',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_showcase_domain_model_project',
				'foreign_table_where' => 'AND tx_showcase_domain_model_project.pid=###CURRENT_PID### AND tx_showcase_domain_model_project.sys_language_uid IN (-1,0) ORDER BY tx_showcase_domain_model_project.title',
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
	),
);
?>