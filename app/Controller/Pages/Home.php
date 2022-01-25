<?php

namespace App\Controller\Pages;
use \App\Utils\View;

Class Home
{
    /**
     *Contents Home
     * @return string
     */
    public static function getHome()
    {
        return View::render('pages/home');
    }

}