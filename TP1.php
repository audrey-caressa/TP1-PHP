<?php
include 'start_page_end_page.inc.php';
echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
echo 'C\'est pas mal non ? <br/>';
$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';
echo "$var1 + $var2"; //6 + 1.3
echo $var1 + $var2; // 7.3
//echo $var1 + $var3; // impossible

start_page('Test');

echo date('F d, Y, h:i a');
echo ' <!DOCTYPE html> 
            <html lang="fr" xmlns="http://www.w3.org/1999/html">
                <head>
                    <title>  LE TITRE  </title>
                </head>
                <body> </br> </body>';

$jour = date('d/m/Y', strtotime('2019-04-01')); //strtotime -> string to date et date -> date to string

echo $jour;

?>
