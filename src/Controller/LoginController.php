<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    public function __construct(RequestStack $requestStack)
    {

        $this->requestStack = $requestStack;
        $this->session = $this->requestStack->getSession();








    }


    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
{
    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();
    $totalItemsInCart = $this->session->get('totalItemsInCart');

            if ($totalItemsInCart) {
            $this->targetRoute = $this->generateUrl('app_koszyk'); // Przekierowanie do admin_dashboard
        } else {
            $this->targetRoute = $this->generateUrl('admin_dashboard'); // Przekierowanie do app_koszyk
        }

    return $this->render('@EasyAdmin/page/login.html.twig', [
        // parameters usually defined in Symfony login forms
        'error' => $error,
        'last_username' => $lastUsername,

        // OPTIONAL parameters to customize the login form:

        // the translation_domain to use (define this option only if you are
        // rendering the login template in a regular Symfony controller; when
        // rendering it from an EasyAdmin Dashboard this is automatically set to
        // the same domain as the rest of the Dashboard)
        'translation_domain' => 'admin',

        // by default EasyAdmin displays a black square as its default favicon;
        // use this method to display a custom favicon: the given path is passed
        // "as is" to the Twig asset() function:
        // <link rel="shortcut icon" href="{{ asset('...') }}">
        'favicon_path' => '/favicon-admin.svg',

        // the title visible above the login form (define this option only if you are
        // rendering the login template in a regular Symfony controller; when rendering
        // it from an EasyAdmin Dashboard this is automatically set as the Dashboard title)
        'page_title' => 'Danmal - panel administracyjny',

        // the string used to generate the CSRF token. If you don't define
        // this parameter, the login form won't include a CSRF token
        'csrf_token_intention' => 'authenticate',

        // the URL users are redirected to after the login (default: '/admin')
        'target_path' => $this->targetRoute,

        // the label displayed for the username form field (the |trans filter is applied to it)
        'username_label' => 'E-mail',

        // the label displayed for the password form field (the |trans filter is applied to it)
        'password_label' => 'Hasło',

        // the label displayed for the Sign In form button (the |trans filter is applied to it)
        'sign_in_label' => 'Zaloguj',

        // the 'name' HTML attribute of the <input> used for the username field (default: '_username')
        'username_parameter' => '_username',

        // the 'name' HTML attribute of the <input> used for the password field (default: '_password')
        'password_parameter' => '_password',

        // whether to enable or not the "forgot password?" link (default: false)
        'forgot_password_enabled' => true,

        // the path (i.e. a relative or absolute URL) to visit when clicking the "forgot password?" link (default: '#')
        //'forgot_password_path' => $this->generateUrl('...', ['...' => '...']),

        // the label displayed for the "forgot password?" link (the |trans filter is applied to it)
        'forgot_password_label' => 'Zapomniałeś hasła?',

        // whether to enable or not the "remember me" checkbox (default: false)
        'remember_me_enabled' => true,

        // remember me name form field (default: '_remember_me')
        'remember_me_parameter' => 'custom_remember_me_param',

        // whether to check by default the "remember me" checkbox (default: false)
        'remember_me_checked' => true,

        // the label displayed for the remember me checkbox (the |trans filter is applied to it)
        'remember_me_label' => 'Zapamiętaj mnie',
    ]);
}




    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(AuthenticationUtils $authenticationUtils, SessionInterface $session)
    {
        $session->remove('totalItemsInCart');
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
