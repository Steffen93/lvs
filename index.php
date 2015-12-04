<?php

// unsere Klassen einbinden
foreach (glob("classes/*.php") as $class)
{
    include_once $class;
}
foreach (glob("classes/views/*.php") as $viewClass)
{
    include_once $viewClass;
}

// $_GET und $_POST zusammenfasen, $_COOKIE interessiert uns nicht.
$request = array_merge($_GET, $_POST);
// Controller erstellen
$controller = new Controller($request);
// Inhalt der Webanwendung ausgeben.
echo $controller->display();

?>
