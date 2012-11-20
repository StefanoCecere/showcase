<?php

########################################################################
# Extension Manager/Repository config file for ext "showcase".
#
# Auto generated 30-10-2012 15:30
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
	'dependencies' => 'cms,extbase,fluid,krur',
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
	'version' => '0.6.0',
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
	'_md5_values_when_last_written' => 'a:41:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"80ec";s:14:"ext_tables.php";s:4:"a62f";s:14:"ext_tables.sql";s:4:"e5ef";s:9:"README.md";s:4:"bb18";s:41:"Classes/Controller/CategoryController.php";s:4:"c4a2";s:38:"Classes/Controller/MediaController.php";s:4:"b376";s:40:"Classes/Controller/ProjectController.php";s:4:"0c2e";s:33:"Classes/Domain/Model/Category.php";s:4:"992b";s:30:"Classes/Domain/Model/Media.php";s:4:"5370";s:32:"Classes/Domain/Model/Project.php";s:4:"f03a";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"fde2";s:45:"Classes/Domain/Repository/MediaRepository.php";s:4:"a78d";s:47:"Classes/Domain/Repository/ProjectRepository.php";s:4:"cb82";s:46:"Configuration/FlexForms/flexform_portfolio.xml";s:4:"dd7f";s:45:"Configuration/FlexForms/flexform_showreel.xml";s:4:"8843";s:30:"Configuration/TCA/Category.php";s:4:"7a40";s:27:"Configuration/TCA/Media.php";s:4:"436b";s:29:"Configuration/TCA/Project.php";s:4:"50d5";s:38:"Configuration/TypoScript/constants.txt";s:4:"c2c2";s:34:"Configuration/TypoScript/setup.txt";s:4:"ed52";s:40:"Resources/Private/Language/locallang.xml";s:4:"b376";s:78:"Resources/Private/Language/locallang_csh_tx_showcase_domain_model_category.xml";s:4:"1b92";s:75:"Resources/Private/Language/locallang_csh_tx_showcase_domain_model_media.xml";s:4:"a8b8";s:77:"Resources/Private/Language/locallang_csh_tx_showcase_domain_model_project.xml";s:4:"a4b0";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"b6f7";s:38:"Resources/Private/Layouts/Default.html";s:4:"3562";s:47:"Resources/Private/Templates/Media/Showreel.html";s:4:"71cc";s:45:"Resources/Private/Templates/Project/List.html";s:4:"7c2f";s:45:"Resources/Private/Templates/Project/Show.html";s:4:"a17e";s:40:"Resources/Public/Icons/category_main.gif";s:4:"905a";s:39:"Resources/Public/Icons/category_sub.gif";s:4:"1103";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:57:"Resources/Public/Icons/tx_showcase_domain_model_media.gif";s:4:"1103";s:59:"Resources/Public/Icons/tx_showcase_domain_model_project.gif";s:4:"1103";s:59:"Resources/Public/plugins/flexslider/flexslider-showreel.css";s:4:"4393";s:50:"Resources/Public/plugins/flexslider/flexslider.css";s:4:"4393";s:49:"Resources/Public/plugins/flexslider/froogaloop.js";s:4:"e743";s:52:"Resources/Public/plugins/flexslider/jquery.fitvid.js";s:4:"9f5d";s:60:"Resources/Public/plugins/flexslider/jquery.flexslider-min.js";s:4:"1751";s:63:"Resources/Public/plugins/flexslider/images/bg_direction_nav.png";s:4:"f595";}',
);

?>