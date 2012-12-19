<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log', 'bootstrap',),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.rights.*', 
		'application.modules.rights.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'pim',
		'renum',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'tarjono',
			//giiplus bro
			'generatorPaths' => array('bootstrap.gii',),
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'rights'=>array(
			'superuserName'=>'admin',
			'authenticatedName'=>'Authenticated',
			'userIdColumn'=>'id',
			'userNameColumn'=>'username',
			'enableBizRule'=>true,
			'enableBizRuleData'=>false,
			'displayDescription'=>true,
			'flashSuccessKey'=>'RightsSuccess', 
			'flashErrorKey'=>'RightsError', 
			'baseUrl'=>'/rights', 
			'layout'=>'rights.views.layouts.main', 
			'appLayout'=>'application.views.layouts.main', 
			'cssFile'=>'rights.css',
			'debug'=>false,
			'userClass'=>'WUser',
			//'install'=>true,
		),
		
	),

	// application components
	'components'=>array(
		'metadata'=>array('class'=>'Metadata'),
		'allspark'=>array('class'=>'AllSpark'),
		
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			//rights rbac
			'class'=>'RWebUser',
			
		),
		
		'authManager'=>array(
			'class'=>'RDbAuthManager',
			'connectionID'=>'db',
			'itemTable'=>'AuthItem',
			'itemChildTable'=>'AuthItemChild',
			'assignmentTable'=>'AuthAssignment',
			'rightsTable'=>'Rights',

		),	
		'bootstrap' => array(
		    'class' => 'ext.bootstrap.components.Bootstrap',
		    'responsiveCss' => true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		
		'db'=>array(
			'pdoClass' => 'NestedPDO',
			'connectionString' => 'mysql:host=localhost;dbname=ihcms',
			'emulatePrepare' => true,
			'username' => 'tarjono',
			'password' => 'tarjono',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);