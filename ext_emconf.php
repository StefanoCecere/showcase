<?php

########################################################################
# Extension Manager/Repository config file for ext "showcase".
#
# Auto generated 05-10-2012 12:42
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Showcase',
	'description' => 'Portfolio and Showcase of categorized projects',
	'category' => 'plugin',
	'author' => 'Stefano Cecere',
	'author_email' => 'stefano.cecere@krur.com',
	'author_company' => 'KRUR - krur.com',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/showcase/media/,uploads/showcase/project/',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.5.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
			'krur' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:36:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"cde2";s:14:"ext_tables.php";s:4:"efca";s:14:"ext_tables.sql";s:4:"1b44";s:41:"Classes/Controller/CategoryController.php";s:4:"c4a2";s:38:"Classes/Controller/MediaController.php";s:4:"fed5";s:40:"Classes/Controller/ProjectController.php";s:4:"27ee";s:33:"Classes/Domain/Model/Category.php";s:4:"6573";s:30:"Classes/Domain/Model/Media.php";s:4:"1f7f";s:32:"Classes/Domain/Model/Project.php";s:4:"f071";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"19a4";s:45:"Classes/Domain/Repository/MediaRepository.php";s:4:"34cc";s:47:"Classes/Domain/Repository/ProjectRepository.php";s:4:"cb82";s:48:"Classes/ViewHelpers/Facebook/ShareViewHelper.php";s:4:"d91d";s:46:"Configuration/FlexForms/flexform_portfolio.xml";s:4:"21db";s:30:"Configuration/TCA/Category.php";s:4:"c772";s:27:"Configuration/TCA/Media.php";s:4:"5ee5";s:29:"Configuration/TCA/Project.php";s:4:"7861";s:38:"Configuration/TypoScript/constants.txt";s:4:"c2c2";s:34:"Configuration/TypoScript/setup.txt";s:4:"ed52";s:40:"Resources/Private/Language/locallang.xml";s:4:"b376";s:78:"Resources/Private/Language/locallang_csh_tx_showcase_domain_model_category.xml";s:4:"1b92";s:75:"Resources/Private/Language/locallang_csh_tx_showcase_domain_model_media.xml";s:4:"a8b8";s:77:"Resources/Private/Language/locallang_csh_tx_showcase_domain_model_project.xml";s:4:"a4b0";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"b558";s:38:"Resources/Private/Layouts/Default.html";s:4:"3562";s:45:"Resources/Private/Templates/Project/List.html";s:4:"942f";s:45:"Resources/Private/Templates/Project/Show.html";s:4:"992f";s:50:"Resources/Private/Templates/Project/ShowMedia.html";s:4:"3503";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:60:"Resources/Public/Icons/tx_showcase_domain_model_category.gif";s:4:"1103";s:57:"Resources/Public/Icons/tx_showcase_domain_model_media.gif";s:4:"1103";s:59:"Resources/Public/Icons/tx_showcase_domain_model_project.gif";s:4:"1103";s:35:"Tests/Domain/Model/CategoryTest.php";s:4:"6b79";s:32:"Tests/Domain/Model/MediaTest.php";s:4:"7f6b";s:34:"Tests/Domain/Model/ProjectTest.php";s:4:"2736";}',
);

?>