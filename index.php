<?php
require_once ('postgres.php');
require_once ('data.php');
require_once ('session.php');

$db = new DB();
$session = new Session();
$num = new Numbers();

if($_POST)
{
	$session->setAlert($num->isHappy($_POST['number']));
	$db->addData($_POST['number']);
    header('Location: /');
    exit();
}

//$session->setNumber($num->getData());

require_once('form.php');
$session->removeAlert();
