<?php
function renderMenuToHTML($currentPageId) {
$mymenu = array(
'accueil' => array( 'Accueil' ),
'cv' => array( 'C.V' ),
'hobbies' => array('My Hobbies')
);
echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId === $currentPageId) {
            echo "<li><a id=\"currentpage\" href=\"" . $pageId . ".php\">" . $pageParameters[0] . "</a></li>";
        } else {
            echo "<li><a href=\"" . $pageId . ".php\">" . $pageParameters[0] . "</a></li>";
        }
    }
echo "</ul>";
}
?>