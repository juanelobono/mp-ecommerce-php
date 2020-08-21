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
    require __DIR__ .  '/vendor/autoload.php';
    /**
     *  Test
     * 
     * @url POST /mp
     */
    public function crearPreferencia() {
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken('TEST-7811742321461751-081219-ba43cd254bb87479a552d8d22a153c10-145669706');

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->title = 'Mi producto';
        $item->quantity = 1;
        $item->unit_price = 75.56;
        $preference->items = array($item);
        $preference->save();


        $json = filter_var(file_get_contents('php://input'));
        $datos = json_decode($json);
        
       
        
        return array("co2" => round($co2/1000, 2)."Kg de CO2 emitidos en el transporte");        
    }
}
