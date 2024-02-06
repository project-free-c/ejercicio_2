<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'app_payment')]
 
    public function processPayment(Request $request, string $paymentType="PayPal"): Response
    {
        $totalAmount = 1000; //Modificable

        return $this-> render('components/payment/index.html.twig', [
            'paymentType' => $paymentType,
            'totalAmount' => $totalAmount,
            'paymentStatus' => 'Pago exitoso' // Agrega lógica para obtener el estado del pago
        ]);
    } 
}
