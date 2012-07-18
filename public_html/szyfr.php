<?php
	/**
	* Szyfrowanie imienia
	*
	* @package szyfr.php
	* @author Alicja Cyganiewicz
	*/
	
	//załączenie pliku nagłówkowego, który z kolei załącza biblioteki
	include 'cms.h.php';
		
	$strona['zawartosc'] = 'szyfr';
	
	if(isset($_POST['imie'])){
	
		$strona['szyfr'] = szyfruj($_POST['imie']);
		
	}
	
	wyswietl_strone($sciezki, $szablony, $strona);
?>