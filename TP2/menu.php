<?php
function renderMenuToHTML($currentPageId,$currentLanguage) {
$mymenu = array(
'accueil' => array( 'Accueil' ),
'cv' => array( 'C.V' ),
'hobbies' => array('My Hobbies'),
'contact' => array('Contact')
);
echo "<ul>";
    if ($currentLanguage === "en") {
            echo "<li><a href='http://localhost:8888/tp2/index.php?page=" . $currentPageId . "&lang=fr'>fr</a></li>";
        } else {
            echo "<li><a href='http://localhost:8888/tp2/index.php?page=" . $currentPageId . "&lang=en'>en</a></li>";
        }
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId === $currentPageId) {
            echo "<li><a id=\"currentpage\" href=\"http://localhost:8888/tp2/index.php?page=" . $pageId . "&lang=" . $currentLanguage . "\">" . $pageParameters[0] . "</a></li>";
        } else {
            echo "<li><a href='http://localhost:8888/tp2/index.php?page=" . $pageId . "&lang=" . $currentLanguage . "'>" . $pageParameters[0] . "</a></li>";
        }
    }
echo "</ul>";
}
?>