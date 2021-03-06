<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use JMS\Serializer\Annotation as Serializer;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class UserController
 * @package AppBundle\Controller
 */
class UserController extends AbstractController
{
    /**
     * @ApiDoc(
     *     section="Users",
     *     description="Get the user currently logged-in",
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProfileAction()
    {
        return $this->respond(
            [
                'profile' => $this->getUser(),
            ],
            ['user_show']
        );
    }

    /**
     * @ApiDoc(
     *     section="Users",
     *     description="Get an user by its id",
     * )
     *
     * @param int $id User's id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getUserAction($id)
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);

        return $this->respond(
            [
                'user' => $user,
            ],
            ['user_show']
        );
    }
}
