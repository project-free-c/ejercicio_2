<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentMethodController extends AbstractController
{
    #[Route('/payment/method', name: 'app_payment_method')]
    public function index(): Response
    {        
        return $this->render('payment_method/index.html.twig', [
            "paymentMethod"     => $this->getParameter("paymentMethod")
        ]);
    }

    #[Route('/payment/method/processing/{method}', name: 'app_payment')]
    public function payment(string $method = ""): Response
    {
        if($method === ""){
            return $this->redirectToRoute('app_payment_method');
        }

        return $this->render('payment_method/payment.html.twig', [
            "method"    => $method,
            "total"     => $this->getParameter("total"),
            "urlPayment"=> $this->getParameter("urlPayment")
        ]);
    }
}
