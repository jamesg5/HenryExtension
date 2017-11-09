<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'HenryExtension' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['HenryExtension'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['HenryExtensionMagic'] = __DIR__ . '/Magic.php';
	wfWarn(
		'Deprecated PHP entry point used for AddWatchers extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the AddWatchers extension requires MediaWiki 1.25+' );
}