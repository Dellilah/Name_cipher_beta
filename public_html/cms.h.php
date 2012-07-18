<?php
    /**
     * Skrypt odpowiedzialny za załączenie wszystkich niezbędnych bibliotek.
     *
     * @package cms.h.php
     * @author Alicja Cyganiewicz
     */

    // konfiguracja developerska - wyświetlanie błędów
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors','on');
	ini_set('default_charset', 'utf-8');
   
    // załączenie bibliotek:
	
	//bilioteka w której ustalamy jaka jest ścieżka do szablonów, jakie są ich rozszerzenia - czyli jednym słowem wszystko 
	//co potrzebne jest do wyświetlenia
    include dirname(dirname(__FILE__)) . '/lib/inc/konfiguracja.inc.php';
	
	//biblioteka w której tak naprawdę jest tylko jedna funkcja - wyswietl_strone, która odpowiada za wyświetlenie strony 
	// - robi to poprzez ZAŁĄCZENIE pliku index.tpl.php - czyli tak naprawdę dzięki tej bibliotece w ogóle cokolwiek widzimy
	include dirname(dirname(__FILE__)) . '/lib/inc/szablony.inc.php';
	
	//biblioteka w której znajduje się również jedna prosta funkcja - szyfrująca
	include dirname(dirname(__FILE__)) . '/lib/inc/szyfr.inc.php';
	
?>