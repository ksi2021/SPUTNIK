<?php

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function getNumber()
    {
        return $_SESSION['number'];
    }
    public function setNumber($number)
    {
        $_SESSION['number'] = $number;
    }

    public function getAlert()
    {
        return $_SESSION['alert'];
    }
    public function setAlert($number)
    {
        $_SESSION['alert'] = $number;
    }

    public function removeAlert()
    {
        unset($_SESSION['alert']);
    }

    public function isAlert()
    {
        return isset($_SESSION['alert']);
    }

}