<?php

require_once 'vendor/autoload.php';
use App\classes\Calculator;
use App\classes\Odd;
use App\classes\prime;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }

    elseif (isset($_POST['btn']))
    {
        $calculator = new Calculator($_POST);
        $result = $calculator->index();
    }
    elseif ($_GET['pages']=='odd-even')
    {
        include "pages/odd.php";
    }
    elseif (isset($_POST['odd-btn']))
    {
        $odd = new odd ($_POST);
        $result = $odd->index2();
    }

    elseif ($_GET['pages']=='prime')
    {
    include "pages/prime.php";
    }
    elseif (isset($_POST['primebtn']))
    {

    }
}




