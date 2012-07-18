<?php
	/**
	* Szyfrowanie imienia
	*
	* @package szyfr.php
	* @author Alicja Cyganiewicz
	*/
	
	//załączenie pliku nagłówkowego, który z kolei załącza biblioteki
	include 'cms.h.php';
	
	//ustalenie ktory szablon bedziemy chcieli wyświetlić
	$strona['zawartosc'] = 'szyfr';
	
	//sprawdzamy czy zostało coś wysłane z pola "imie" metoda post
	//jeżeli uruchamiamy program po raz pierwszy to oczywiście nie!
	
	if(isset($_POST['imie'])){
		
		//jeżeli zostało coś wysłane to należy to zaszyfrować i zapisać
		$strona['szyfr'] = szyfruj($_POST['imie']);
		
	}
	
	//wyświetlamy stronę
	// równie dobrze moglibyśmy tutaj dać include 'index.tpl.php' i efekt byłby ten sam
	// Ale jest to mnie czytelne i gdybyśmy kiedyś chcieli rozbudować takie wyświetlanie to stałoby się to kłopotliwe - zmiana we wszystkich plikach,a  nie w jednej funkcji
	wyswietl_strone($sciezki, $szablony, $strona);
?>