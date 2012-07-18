<?php
    /**
     * Szyfrowanie - formularz i wynik
     *
     * @package szyfr.tpl.php
     * @author Alicja Cyganiewicz
     */
?>

<form method="post" action="szyfr.php">
	Podaj imię do zaszyfrowania
	<input type="text" name="imie">
	<input type="submit" value="szyfruj">
</form>

<?php if(isset($strona['szyfr'])){ ?>

	<div class="zaszyfrowane">
		Zaszyfrowano: 
	<?php echo $strona['szyfr'];?>
	</div>

<?php } ?>