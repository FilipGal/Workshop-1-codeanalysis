<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once "view/LayoutView.php";

$v = new LayoutView();
$v->renderLayoutView();
