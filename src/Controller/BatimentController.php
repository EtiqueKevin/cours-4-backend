<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Batiment;
use App\Repository\BatimentRepository;

final class BatimentController extends AbstractController
{
    #[Route('/batiment', name: 'app_batiment')]
    public function index(BatimentRepository $batimentRepository): Response
    {

        $batiments = $batimentRepository->findAll();

        return $this->render('batiment/index.html.twig', [
            'batiments' => $batiments,
        ]);
    }
}
