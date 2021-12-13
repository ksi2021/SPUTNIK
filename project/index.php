<?php
header( "Content-Type: text/html; charset=utf-8" );
require_once ('postgres.php');
require_once ('data.php');
require_once ('session.php');

$db = new DB();
$session = new Session();
$num = new Numbers();
if($_POST)
{
    if(strlen($_POST['number']) != 16)
    {
        header('Location: /');
        exit();
    }
	$session->setAlert($num->isHappy($_POST['number']));
	$db->addData($_POST['number']);
    header('Location: /');
    exit();
}

$session->setNumber($num->getData());

require_once('form.php');
$session->removeAlert();
?>