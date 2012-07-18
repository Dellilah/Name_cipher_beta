<?php
	/**
	* Przydatne funkcje
	*
	* @package szyfr.inc.php
	* @author Alicja Cyganiewicz
	*/
	
	/** 
	* Szyfrowanie podanego ciągu
	*
	*@param string $ciag Ciąg znaków do zaszyfrowania
	*@return string Zaszyfrowany ciąg
	*
	*/
	
	function szyfruj($ciag){
		
		$szyfr='';
		$tablica_znakow = str_split($ciag);
		for($i=0; $i<count($tablica_znakow); $i++){
			$nowy_znak = ++$tablica_znakow[$i];
			$szyfr = $szyfr.$nowy_znak;
		}
		
		return $szyfr;
	}

?>