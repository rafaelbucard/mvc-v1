<?php

namespace App\Utils;

class View
{

    /**
     *Method: Return content of view
     * @param string $view
     * @return string
     */
    private static function getContentView ($view)
    {
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : 'Opa!';
    }


    /**
     * Returns view render
     *
     * @param  string $view
     * @return string
     */
    public static function render($view)
    {

        $contentView = self::getContentView($view);
        return $contentView;

    }
}