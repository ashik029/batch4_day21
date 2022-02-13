<?php


namespace App\classes;


class Home
{
    public function index()
    {
        header('location: action.php?pages=home');
    }
    public function index2()
    {
        header('location: action.php?pages=odd-even');
    }
}