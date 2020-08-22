<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GoogleMaps
 *
 * @author fdegiovanni
 */


class PasarelaMercadoPago {
    
    /**
     *  Test
     * 
     * @url POST /mp/webhook
     */
    public function recibirNotificacion (){
        $json = filter_var(file_get_contents('php://input'));
        $class = json_decode($json);

        require_once('Logger.php');

        Logger::pago($json);

       /*  require_once '../vendor/autoload.php'; 
        MercadoPago\SDK::setAccessToken("TEST-7811742321461751-081219-ba43cd254bb87479a552d8d22a153c10-145669706");

    switch($class->type) {
        case "payment":
            $r = MercadoPago\Payment.find_by_id($class->id);
            break;
        case "plan":
            $r = MercadoPago\Plan.find_by_id($class->id);
            break;
        case "subscription":
            $r = MercadoPago\Subscription.find_by_id($class->id);
            break;
        case "invoice":
            $r = MercadoPago\Invoice.find_by_id($class->id);
            break;
    }

    $json_data = json_encode((array) $example_object);
    Logger::datos($json_data); */

        return array("response" => "ok");

    }
}
