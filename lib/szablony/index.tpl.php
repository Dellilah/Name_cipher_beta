<?php
    /**
     * Layout aplikacji.
     *
     * @package index.tpl.php
     * @author Alicja Cyganiewicz
     */
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <LINK REL=StyleSheet HREF="../public_html/fx/css/style.css"  TYPE="text/css">
        <title> Szyfrowanie </title>
    </head>
    <body>
        <div id="content">
            <?php
                if ( isset($strona['zawartosc'])
                    && ($strona['zawartosc'] != '')
                    && file_exists($sciezki['szablony'] . $strona['zawartosc'] . $szablony['rozszerzenie'])):

                    include $sciezki['szablony'] . $strona['zawartosc'] . $szablony['rozszerzenie'];
                
                else:

                    include $szablony['domyslny_szablon_bledu'] . $szablony['rozszerzenie'];
                
                endif;
            ?>
        </div>
    </body>
</html>