<nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">CV</a></li>
        <li><a href="hobbies.php">Hobbies</a></li>
    </ul>
</nav>
<?php
function renderMenuToHTML($currentPageId) {
$mymenu = array(
'index' => array( 'Accueil' ),
'cv' => array( 'C.V.' ),
'hobbies' => array('My Hobbies')
);
foreach($mymenu as $pageId => $pageParameters) {
echo "...";
}
}
?>