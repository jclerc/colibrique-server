<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Post;

/**
 * Class LoadPostData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadPostData extends AbstractLoader
{
    /**
     * @return int order
     */
    public function getOrder()
    {
        return 3;
    }

    protected function getData()
    {
        return [
            [
                'entity' => Post::class,
                'data' => [
                    [
                        'author' => $this->getReference('user:student-1'),
                        'content' => "Salut les potes,\nça vous dit on fait un barbecue ?\nAllez salut.",
                        'category' => $this->getReference('category:random'),
                        'posted_at' => new \DateTime('2016-11-21 09:12'),
                        'attachments_count' => 0,
                        'date' => null,
                        'location' => null,
                        'promotion' => $this->getReference('promotion:2019'),
                        'reference' => 'max-random',
                    ],
                    [
                        'author' => $this->getReference('user:staff-1'),
                        'content' => "Bonsoir,\nJe propose un petit rassemblement autour d'un bon plat de pates.\nQui vient ?",
                        'category' => $this->getReference('category:evenement'),
                        'posted_at' => new \DateTime('2017-01-10 13:52'),
                        'attachments_count' => 0,
                        'date' => new \DateTime('2017-05-25 18:00:00'),
                        'location' => 'Hétic, 27 Rue du Progrès, 93100 Montreuil',
                        'promotion' => null,
                        'reference' => 'staff-pate',
                    ],
                    [
                        'author' => $this->getReference('user:professor-1'),
                        'content' => "SaucissonType pour lier un saucisson à un autre en One-To-Many: http://symfony.com/doc/current/reference/forms/types/entity.html",
                        'category' => $this->getReference('category:cours'),
                        'posted_at' => new \DateTime('2016-12-25 16:34'),
                        'attachments_count' => 0,
                        'date' => null,
                        'location' => null,
                        'promotion' => $this->getReference('promotion:2019'),
                        'reference' => 'yann-php',
                    ],
                ],
            ],
        ];
    }
}
