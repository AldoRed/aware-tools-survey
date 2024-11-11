<?php

class Ruta{
	static public function ctrRuta(){

		return $_ENV['URL'];
	
	}
	static public function ctrRutaServ(){

		return $_ENV['URL_SERVER'];
	
	}
}
