<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_extbasenews_domain_model_news'] = array(
	'ctrl' => $TCA['tx_extbasenews_domain_model_news']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'title,subtitle,teaser,bodytext,links,date,archive_date,author_name,author_email,image_url,image_caption,image_alt_text,image_title_text,file_url,file_title,file_caption,parent,category,related_news',
	),
	'types' => array(
		'1' => array('showitem'	=> 'title,subtitle,teaser;;;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,bodytext;;;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,links,date,archive_date,author_name,author_email,image_url,image_caption,image_alt_text,image_title_text,file_url,file_title,file_caption,parent,category,related_news'),
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
				'foreign_table' => 'tx_extbasenews_domain_model_news',
				'foreign_table_where' => 'AND tx_extbasenews_domain_model_news.uid=###REC_FIELD_l18n_parent### AND tx_extbasenews_domain_model_news.sys_language_uid IN (-1,0)',
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
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.title',
			'config'	=> array(
				'type' => 'input',
				'size' => 40,
                'max'   => 256,
				'eval' => 'trim,required'
			),
		),
		'subtitle' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.subtitle',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'teaser' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.teaser',
			'config'	=> array(
				'type' => 'text',
				'cols' => '48',
				'rows' => '5',
				'softref' => 'typolink_tag,images,email[subst],url',
				'wizards' => Array(
					'_PADDING' => 4,
					'RTE' => Array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				),
			),
		),
		'bodytext' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.bodytext',
            'config' => Array (
				'type' => 'text',
				'cols' => '48',
				'rows' => '5',
				'softref' => 'typolink_tag,images,email[subst],url',
				'wizards' => Array(
					'_PADDING' => 4,
					'RTE' => Array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				),
			),
		),
		'links' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.links',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.date',
			'config'	=> array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
                'default' => mktime(date("H"),date("i"),0,date("m"),date("d"),date("Y"))
			),
		),
		'archive_date' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.archive_date',
			'config'	=> array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0',
                'default' => '0'
			),
		),
		'author_name' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.author_name',
			'config' => Array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max' => '80'
			),
		),
		'author_email' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.author_email',
			'config' => Array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max' => '80'
			),
		),
		'image_url' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.image_url',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => '10000',
				'uploadfolder' => 'uploads/pics',
				'show_thumbs' => '1',
				'size' => 3,
				'autoSizeMax' => 15,
				'maxitems' => '99',
				'minitems' => '0'
			),
		),
		'image_caption' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.image_caption',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '3'
			),
		),
		'image_alt_text' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.image_alt_text',
			'config' => Array (
				'type' => 'text',
				'cols' => '20',
				'rows' => '3'
			),
		),
		'image_title_text' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.image_title_text',
		    'config' => Array (
				'type' => 'text',
				'cols' => '20',
				'rows' => '3'
			),
		),
		'file_url' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.file_url',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => '',	// Must be empty for disallowed to work.
				'disallowed' => 'php,php3',
				'max_size' => '10000',
				'uploadfolder' => 'uploads/media',
				'show_thumbs' => '1',
				'size' => '3',
				'autoSizeMax' => '10',
				'maxitems' => '100',
				'minitems' => '0'
			),
		),
		'file_title' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.file_title',
			'config' => Array (
				'type' => 'text',
				'cols' => '20',
				'rows' => '3'
			),
		),
		'file_caption' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.file_caption',
			'config' => Array (
				'type' => 'text',
				'cols' => '20',
				'rows' => '3'
			),
		),
		'parent' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.parent',
			'config'	=> array(
				'type' => 'select',
				'foreign_table' => 'tx_extbasenews_domain_model_news',
				'foreign_field' => 'news',
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
							'table'=>'tx_extbasenews_domain_model_news',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'category' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.category',
			'config'	=> array(
				'type' => 'select',
				'foreign_table' => 'tx_extbasenews_domain_model_categorie',
				'MM' => 'tx_extbasenews_news_categorie_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
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
		'related_news' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:extbasenews/Resources/Private/Language/locallang_db.xml:tx_extbasenews_domain_model_news.related_news',
			'config'	=> array(
				'type' => 'select',
				'foreign_table' => 'tx_extbasenews_domain_model_news',
				'MM' => 'tx_extbasenews_news_news_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
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
							'table'=>'tx_extbasenews_domain_model_news',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'news' => array(
			'config' => array(
				'type'	=> 'passthrough',
			),
		),
	),
);
?>