<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 01/03/2016
 * Time: 09:41
 */

namespace Tests\AppBundle\Util;

use AppBundle\Util\TextWrapper;

class TextWrapperTest extends \PHPUnit_Framework_TestCase
{
    public function testBold()
    {
        $wrapper = new TextWrapper();
        $bold = $wrapper->boldText('test');
        $this->assertEquals('<b>test</b>', $bold);
    }

    public function testItalic()
    {
        $wrapper = new TextWrapper();
        $italic = $wrapper->italicText('test');
        $this->assertEquals('<i>test</i>', $italic);
    }

    public function testItalicBold()
    {
        //todo: test the mix of italic and bold
        $this->markTestSkipped('test the mix of italic and bold');
    }
}