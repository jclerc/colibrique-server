<?php

namespace AppBundle\Tests;

/**
 * Class UserControllerTest
 * @package AppBundle\Tests
 */
class UserControllerTest extends AbstractAuthCase
{
    /**
     * Test users
     */
    public function test()
    {
        $client = $this->authenticate();

        $last = count($client->getContainer()->get('doctrine')->getRepository('AppBundle:User')->findAll());

        $client->request('GET', '/api/v1/users/'.$last);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('@hetic.net', $client->getResponse()->getContent());
    }
}
