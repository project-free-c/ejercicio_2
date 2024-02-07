<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Model;

class PaymentController extends AbstractController
{
    #[Route('/payment/result/{paymentType}', name: 'app_payment_result')]
    public function processPayment(string $paymentType=""): Response
    {
        $totalAmount    = $this->getParameter("total");
        $methods        = $this->getParameter("paymentMethod");
        $type           = "";        

        foreach($methods as $method){
            if(array_key_exists("name", $method)){
                if($paymentType === $method["name"]){
                    $class      = "App\\Model\\".$method["class"];
                    $instance   = new $class();
                    $type       = $instance->getMethod();
                }
            }
        }

        if($type === ""){
            return new Response(
                "<html>
                    <body>
                        <div style='display: flex; flex-wrap: wrap; justify-content: center;'>
                            <h1>No se encontro el metodo de pago '$paymentType'</h1>
                        <div>
                    </body>
                </html>"
            );
        }

        return $this->render('payment/index.html.twig', [
            'paymentType' => $type,
            'totalAmount' => $totalAmount,
            'paymentStatus' => 'Pago exitoso' // Agrega lógica para obtener el estado del pago
        ]);
    } 
}
