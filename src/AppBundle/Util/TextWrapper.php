<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 01/03/2016
 * Time: 09:38
 */

namespace AppBundle\Util;


class TextWrapper
{
    public function boldText($text)
    {
        return sprintf('<b>%s</b>', $text);
    }

    public function italicText($text)
    {
        return sprintf('<b>%s</b>', $text);
    }

    public function italicBoldText($text)
    {
        return $this->boldText($this->italicText($text));
    }
}