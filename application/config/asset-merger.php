<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'merge'      => array(Kohana::PRODUCTION, Kohana::STAGING),
	'folder'     => 'assets',
	'load_paths' => array(
		Assets::JAVASCRIPT => DOCROOT.'static'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR,
		Assets::STYLESHEET => DOCROOT.'static'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR,
	),
	'processor'  => array(
		Assets::STYLESHEET => 'cssmin',
        Assets::JAVASCRIPT => 'jsmin',
	),
);