<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_extbasenews_domain_model_categorie'] = array(
	'ctrl' => $TCA['tx_extbasenews_domain_model_categorie']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'title,description,image,shortcut,singe_view_page,parent',
	),
	'types' => array(
		'1' => array('showitem'	=> 'title,description,image,shortcut,singe_view_page,parent'),
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
		'l18n_parent' => array(
			'displayCond'	=> 'FIELD:sys_language_uid:>:0',
			'exclude'		=> 1,
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config'		=> array(
				'type'			=> 'select',
				'items'			=> array(
					array('', 0),
				),
				'foreign_table' => 'tx_extbasenews_domain_model_categorie',
				'foreign_table_where' => 'AND tx_extbasenews_domain_model_categorie.uid=###REC_FIELD_l18n_parent### AND tx_extbasenews_domain_model_categorie.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
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
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_categorie.title',
			'config'	=> array(
				'type' => 'input',
				'size' => 80,
				'eval' => 'trim,required'
			),
		),
		'description' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_categorie.description',
			'config'	=> array(
				'type' => 'input',
				'size' => 300,
				'eval' => 'trim'
			),
		),
		'image' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_categorie.image',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'shortcut' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_categorie.shortcut',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'singe_view_page' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_categorie.singe_view_page',
			'config'	=> array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'parent' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_categorie.parent',
			'config'	=> array(
				'type' => 'select',
				'foreign_table' => 'tx_extbasenews_domain_model_categorie',
				'foreign_field' => 'categorie',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=>'tx_extbasenews_domain_model_categorie',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'categorie' => array(
			'config' => array(
				'type'	=> 'passthrough',
			),
		),
	),
);
?>