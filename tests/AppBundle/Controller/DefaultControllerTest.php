<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }

    public function testHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Hello World', $crawler->filter('#content')->text());
    }

    public function testBoldHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bold_hello');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Hello World', $crawler->filter('#content')->text());
        $this->assertContains('Hello <b>World</b>', $crawler->filter('#content')->html());
    }

    public function testItalicHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/italic_hello');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Hello World', $crawler->filter('#content')->text());
        $this->assertContains('Hello <i>World</i>', $crawler->filter('#content')->html());
    }

    public function testItalicBoldHello()
    {
        //todo: test the mix of italic and bold
        $this->markTestSkipped('test the mix of italic and bold');
    }
}
