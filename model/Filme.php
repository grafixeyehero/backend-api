<?php
/**
 * Created by PhpStorm.
 * User: marci
 * Date: 26/08/2017
 * Time: 17:01
 */

namespace model;


class Filme extends Video
{

    /**
     * Filme constructor.
     */
    public function __construct()
    {
        $this->setTipo('filme');
    }
}