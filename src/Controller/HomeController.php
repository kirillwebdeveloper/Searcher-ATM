<?php

namespace App\Controller;

use App\Form\Privatbank\SearchAtmInfrastructureType;
use App\Model\Privatbank\AtmInfrastructure;
use App\Service\Privatbank\PrivatAtmManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Service\Privatbank\Exception\InvalidUrlException;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class HomeController extends AbstractController
{
    /**
     * @param Request $request
     * @param PrivatAtmManager $atmManager
     *
     * @return Response
     *
     * @throws InvalidUrlException
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     *
     * @Route("/", name="home")
     */
    public function index(Request $request, PrivatAtmManager $atmManager)
    {
        $atmInfrastructure = new AtmInfrastructure();

        $atmInfrastructureForm = $this->createForm(
            SearchAtmInfrastructureType::class,
            $atmInfrastructure
        )->handleRequest($request);

        $atmResult = [];

        if ($atmInfrastructureForm->isSubmitted() && $atmInfrastructureForm->isValid()) {
            $atmResult = $atmManager->getPrivatAtm($atmInfrastructure);
        }

        return $this->render('controller/home/index.html.twig', [
            'atmInfrastructureForm' => $atmInfrastructureForm->createView(),
            'atmResult'             => $atmResult
        ]);
    }
}