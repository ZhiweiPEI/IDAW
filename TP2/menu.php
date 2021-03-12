<?php
function renderMenuToHTML($currentPageId) {
$mymenu = array(
'accueil' => array( 'Accueil' ),
'cv' => array( 'C.V' ),
'hobbies' => array('My Hobbies'),
'contact' => array('Contact')
);
echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId === $currentPageId) {
            echo "<li><a id=\"currentpage\" href=\"http://localhost:8888/tp2/index.php?page=" . $pageId . "\">" . $pageParameters[0] . "</a></li>";
        } else {
            echo "<li><a href='http://localhost:8888/tp2/index.php?page=" . $pageId .  "'>" . $pageParameters[0] . "</a></li>";
        }
    }
echo "</ul>";
}
?>