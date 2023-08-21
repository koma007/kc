<?php

namespace App\Controller\Admin\Users;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserListController extends AbstractController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/user/list', name: 'app_user_list')]
    public function userList(ManagerRegistry $doctrine): Response
    {
        $users = $doctrine->getRepository(User::class)->findAll();

        if (!$users) {
            throw $this->createNotFoundException(
                'Brak użytkowników'
            );
        }

        return $this->render('admin/user_list/user_list.html.twig', [
            'users' => $users,
        ]);
    }
}
