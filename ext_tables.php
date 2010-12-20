<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Feview',
	'FE-View (Extbase tt_news)'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Extbase tt_news');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_feview'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_feview', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_feview.xml');


t3lib_extMgm::addLLrefForTCAdescr('tx_extbasenews_domain_model_news', 'EXT:extbasenews/Resources/Private/Language/locallang_csh_tx_extbasenews_domain_model_news.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_extbasenews_domain_model_news');
$TCA['tx_extbasenews_domain_model_news'] = array(
	'ctrl' => array(
		'title'						=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news',
		'label'						=> 'title',
		'tstamp'					=> 'tstamp',
		'crdate'					=> 'crdate',
		'versioningWS'				=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid'					=> 't3_origuid',
		'languageField'				=> 'sys_language_uid',
		'transOrigPointerField'		=> 'l18n_parent',
		'transOrigDiffSourceField'	=> 'l18n_diffsource',
		'delete'					=> 'deleted',
		'enablecolumns'				=> array(
			'disabled'		=> 'hidden',
		),
		'dynamicConfigFile'			=> t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/News.php',
		'iconfile'					=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_extbasenews_domain_model_news.gif',
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_extbasenews_domain_model_categorie', 'EXT:extbasenews/Resources/Private/Language/locallang_csh_tx_extbasenews_domain_model_categorie.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_extbasenews_domain_model_categorie');
$TCA['tx_extbasenews_domain_model_categorie'] = array(
	'ctrl' => array(
		'title'						=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_categorie',
		'label'						=> 'title',
		'tstamp'					=> 'tstamp',
		'crdate'					=> 'crdate',
		'versioningWS'				=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid'					=> 't3_origuid',
		'languageField'				=> 'sys_language_uid',
		'transOrigPointerField'		=> 'l18n_parent',
		'transOrigDiffSourceField'	=> 'l18n_diffsource',
		'delete'					=> 'deleted',
		'enablecolumns'				=> array(
			'disabled'		=> 'hidden',
		),
		'dynamicConfigFile'			=> t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Categorie.php',
		'iconfile'					=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_extbasenews_domain_model_categorie.gif',
	)
);

	
?>