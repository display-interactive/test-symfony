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
    /**
     * Return a bold HTML string
     *
     * @param string $text
     * @return string
     */
    public function boldText($text)
    {
        return sprintf('<b>%s</b>', $text);
    }

    /**
     * Return an italic HTML string
     * @param string $text
     * @return string
     */
    public function italicText($text)
    {
        return sprintf('<b>%s</b>', $text);
    }

    /**
     * Return an italic and bold HTML string
     * @param $text
     * @return string
     */
    public function italicBoldText($text)
    {
        return $this->boldText($this->italicText($text));
    }
}