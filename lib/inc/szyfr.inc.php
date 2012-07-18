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
	
	/* 
	
		Jaki mamy plan szyfrowania? 
	1.Dzielimy sobie ten ciąg znaków na poejdyncze znaki i zapisujemy je do tablicy 
		np "Alicja" -> $tablica_znakow[0] = "A", $tablica_znaków[1] = "l",...
	2. Przechodzimy pętlą FOR po każdym kolejnym elemencie tej tablicy z pojedynczymi znakami
		pętla for przyjmuje po kolei wartości od 0 do tylu elementów ile jest w tablicy, w ten sposób możemy dostać się do kolejnych elementów tablica_znakow[0], tablica_znakow[1],...
	3. Tworzymy sobie nowy znak z dotychczasowego
		"A" zostaje zapisany w $nowy_znak jako "B", bo jakby 'powiększyliśmy go o 1
	3. Do tego co dotąd stworzyliśmy jako szyfr DOPISUJEMY (za pomocą " . ") ten nowy, zaszyfrowany znak
		czyli jak wchodzimy do pętli to szyfr jest pusty, dopisanie do pustego znaku "B", stworzy szyfr = "B"
		Po następnym przejściu szyfr = "Bm" (Al.... A-> B, l -> m)
	5. Na koniec wyrzucamy z funkcji cały gotowy ciąg zmienionych znaków
	
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