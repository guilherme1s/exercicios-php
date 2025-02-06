<?php
session_start();
require_once "addIndividual.php";
require_once "delIndividual.php";
require_once "infoIndividual.php";
require_once "queryIndividuals.php";

if (!isset($_SESSION['individuals'])) {
    $_SESSION['individuals'] = [];
}
?>
