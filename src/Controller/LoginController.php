<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use App\Entity\User;

class LoginController extends AbstractController
{
    public function login(#[CurrentUser] ?User $user): Response
    {
        // This method can be empty - it will be intercepted by the security layer
        // If you reach here, it means the user is successfully authenticated
        // You can return a custom JSON response or just inform the front end
        return $this->json([
            'message' => 'Login Successful',
            'user' => [
                'username' => $user->getUsername(),
                'roles' => $user->getRoles(),
            ],
        ]);
    }
}
