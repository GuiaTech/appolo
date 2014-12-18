<?php

/**
 *
 * @package		appolo
 * @subpackage	dgjolero
 * @author	Jo�o Guilherme <joaoguilherme@guiatech.com.br>
 */

require_once ( CLASSES_DIRECTORY . '/dispatch.inc.php' ) ;

class appolo_dispatcher extends appolo {


	/**
	 * N�mero de vers�o da classe.
	 * A vari�vel � p�blica devido � heran�a do appolo.
	 *
	 * @var	string
	 */

	public $_version = "1.0" ;
	public static $router = "index.php" ;
	public static $flash_cookie = "_F" ;



	public static function dispatch(){
		dispatch() ;
	}



	public function appolo_dispatcher(){

		config([
			'dispatch.views' => TEMPLATES_DIRECTORY, /*tmpls dir*/
			'dispatch.layout' => TEMPLATES_DIRECTORY, /*tmpls dir*/
			'dispatch.flash_cookie' => self::$flash_cookie,
			'dispatch.url' => APPOLO_URL,
			'dispatch.router' => self::$router
		]) ;

	}



}