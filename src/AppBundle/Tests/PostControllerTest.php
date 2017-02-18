<?php

namespace AppBundle\Tests;

/**
 * Class PostControllerTest
 * @package AppBundle\Tests
 */
class PostControllerTest extends AbstractAuthCase
{
    /**
     * Test posts
     */
    public function test()
    {
        $student = $this->authenticate('thomas.sanlis');
        $professor = $this->authenticate('yann.le-scouarnec');
        $staff = $this->authenticate('damien.jordan');

        $student->request('GET', '/api/v1/posts');
        $this->assertContains('Salut les potes', $student->getResponse()->getContent());
        $this->assertContains('un petit rassemblement', $student->getResponse()->getContent());
        $this->assertContains('lier un saucisson', $student->getResponse()->getContent());

        $professor->request('GET', '/api/v1/posts');
        $this->assertNotContains('Salut les potes', $professor->getResponse()->getContent());
        $this->assertContains('un petit rassemblement', $professor->getResponse()->getContent());
        $this->assertContains('lier un saucisson', $professor->getResponse()->getContent());

        $staff->request('GET', '/api/v1/posts');
        $this->assertNotContains('Salut les potes', $staff->getResponse()->getContent());
        $this->assertContains('un petit rassemblement', $staff->getResponse()->getContent());
        $this->assertNotContains('lier un saucisson', $staff->getResponse()->getContent());
    }
}
