<?php

// unsere Klassen einbinden
foreach (glob("classes/*.php") as $filename)
{
    include_once $filename;
}
/*
include('classes/controller.php');
include('classes/model.php');
include('classes/globals.php');
include('classes/view.php');
*/

// $_GET und $_POST zusammenfasen, $_COOKIE interessiert uns nicht.
$request = array_merge($_GET, $_POST);
// Controller erstellen
$controller = new Controller($request);
// Inhalt der Webanwendung ausgeben.
echo $controller->display();

?>
