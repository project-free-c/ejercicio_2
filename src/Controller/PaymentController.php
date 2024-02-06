<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'app_payment_result')]
    public function processPayment(string $paymentType="PayPal"): Response
    {
        $totalAmount = $this->getParameter("total");

        return $this->render('payment/index.html.twig', [
            'paymentType' => $paymentType,
            'totalAmount' => $totalAmount,
            'paymentStatus' => 'Pago exitoso' // Agrega lógica para obtener el estado del pago
        ]);
    } 
}
