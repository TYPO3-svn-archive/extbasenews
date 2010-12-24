<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Feview',
	array(
		'News' => 'index, show, new, create, edit, update, delete','Categorie' => 'index, show, new, create, edit, update, delete',
	),
	array(
		'News' => 'create, show, update, delete','Categorie' => 'create, update, delete',
	)
);

?>