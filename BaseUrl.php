<?php
/**
 * Classe que configura o diretório-base dos arquivos de 
 * mídia e dos links da aplicação, transformando-os em links absolutos
 * 
 * @copyright  	Copyright (c) 2012 - Frontise Interactive
 * @author 		Tarcísio Estevam - tarcisioestevam@gmail.com (http://www.tarcisioestevam.com.br)
 * @license    	Comercial
 * @version    	1.0
 * @package		library.frontise.view.helper
 *
 */
class Frontise_View_Helper_BaseUrl
{
	/**
	 * Define o diretório-base da aplicação
	 *
	 * @return $fc->getBaseUrl - Diretório-base da aplicação
	 */
	public function baseUrl()
	{
		// Recupera a instância do controlador frontal criado anteriormente
		$fc = Zend_Controller_Front::getInstance();
		
		// Retorna o diretório-base da aplicação
		return $fc->getBaseUrl() . "http://www.frontise.com.br";
	}
}
?>