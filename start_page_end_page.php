<?php

function start_page($title)
{
    echo ' <!DOCTYPE html> 
            <html lang="fr">
                <head>
                    <title>  $title  </title>
                </head>
                <body> <hr/><br/><strong>Test</strong><br/><hr/> '; //end of line
};

start_page('Test');

function end_page()
{
    echo '</body></html>';
}
?>