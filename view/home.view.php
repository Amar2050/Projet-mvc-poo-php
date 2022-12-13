<?php ob_start(); ?>

<p>Accueil</p>

<?php

$content = ob_get_clean();
$title="Bienvenue chez Game-X";
require_once "view/base.html.php";

?>