<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author Andrey
 */
class View
{

    public $path;

    public function __construct()
    {
        $this->path = ROOT.'/views/';
    }

    public static function render($path, $data = FALSE)
    {
        ob_start();
        require_once(ROOT.'/views/'.$path.'.php');
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }

}
