<?php

/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 19/04/17
 * Time: 09:51
 */
class Controller
{

    /**
     * Controller constructor.
     * @param $view
     */
    function __construct($view)
    {
;
        $this->render($view);
    }

    /**
     * @param $view
     */
    public function render($view)
    {
        include_once MODPATH . DS . $view;

    }

}