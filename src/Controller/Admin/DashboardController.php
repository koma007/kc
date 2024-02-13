<?php

namespace App\Controller\Admin;

use App\Entity\ArrangementPrice;
use App\Entity\Comment;
use App\Entity\DomyslnaGrupa;
use App\Entity\Dostawcy;
use App\Entity\Grupy;
use App\Entity\Hurtowe;
use App\Entity\Polprodukty;
use App\Entity\User;
use App\Entity\Wyceny;
use App\Entity\Zamowienie;
use App\Entity\Zeszyt;
use App\Entity\Zeszyt2;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends AbstractDashboardController
{

     private $security;

     public function __construct(Security $security)
     {
         $this->security = $security;
     }


    #[Route('/admin', name: 'admin_dashboard')]
    public function index(): Response
    {

        return $this->render('admin/index.html.twig');

        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {

        return Dashboard::new()
            ->setTitle('DANMAL - PANEL');
    }

    public function configureMenuItems(): iterable
    {
            yield MenuItem::section('Główne');
            yield MenuItem::linkToUrl('Panel', 'fa fa-home', $this->generateUrl('admin_dashboard'));
            yield MenuItem::linkToUrl('Sklep', 'fa fa-shopping-cart', $this->generateUrl('app_sklep'));

        if ($this->security->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('CENNIK');
            yield MenuItem::linkToCrud('Półprodukty', 'fa fa-fan', Polprodukty::class);
            yield MenuItem::linkToCrud('Wycena kompozycji', 'fa fa-tags', Wyceny::class);
//            yield MenuItem::linkToCrud('Kompozycje', 'fa fa-fan', Kompozycje::class);
//            yield MenuItem::linkToCrud('Kompozycje', 'fa fa-fan', Kompozycje::class);

            yield MenuItem::subMenu('Konfiguracja', 'fa fa-article')->setSubItems([
                MenuItem::linkToCrud('Grupy kompozycji', 'fa fa-tags', Grupy::class),
                MenuItem::linkToCrud('Domyślna grupa', 'fa fa-star', DomyslnaGrupa::class),
                MenuItem::linkToCrud('Dostawcy', 'fa fa-car', Dostawcy::class),
//                MenuItem::linkToCrud('Domyślna grupa', 'fa fa-tags', Grupy::class)
//                    ->setController(GrupyDomyslnaCrudController::class)
            ]);

            yield MenuItem::section('ZAMÓWIENIA');
            yield MenuItem::linkToCrud('Hurtowe', 'fa fa-shop', Hurtowe::class);
//            yield MenuItem::linkToCrud('Detal', 'fa fa-receipt', Zamowienie::class);


//            yield MenuItem::section('FV');
//            yield MenuItem::linkToCrud('FV', 'fa fa-money', Hurtowe::class);
//            yield MenuItem::linkToCrud('FV - konfiguracja', 'fa fa-gear', Hurtowe::class);





            yield MenuItem::section('UŻYTKOWNICY');
            yield MenuItem::linkToRoute('Dodaj użytkownika', 'fa fa-user-plus', 'app_register');
            yield MenuItem::linkToCrud('Lista użytkowników', 'fa fa-users', User::class);





            if ($this->security->getUser()->getUserIdentifier() == 'admin@admin.pl') {
                yield MenuItem::section('TESTY MARIUSZA');
                yield MenuItem::linkToRoute('API GOOGLE', 'fa-solid fa-magnifying-glass', 'app_es');
                yield MenuItem::linkToCrud('comment', 'fa-solid fa-address-book', Comment::class);
            }


        }

        if ($this->security->isGranted('ROLE_PRACOWNIK') OR $this->security->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('PRACOWNIK');
            yield MenuItem::linkToCrud('Zeszyt', 'fa-solid fa-address-book', Zeszyt::class);
        }

        yield MenuItem::section('------------------');

        yield MenuItem::linkToLogout('Wyloguj', 'fa fa-sign-out');


//        yield MenuItem::linkToCrud('Categories', 'fa fa-tags', Category::class)
//            ->setDefaultSort(['createdAt' => 'DESC']);
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setAvatarUrl($user->getAvatarUrl());
    }

    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('admin');
    }


}
