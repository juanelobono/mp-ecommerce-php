<?php
class Logger {

    public static function pago($data) {
        try {
            
            $arr = print_r($data, true);                        

            //log de  la peticion
            $fp = fopen("../log/pagos.log", "a+");
            fwrite($fp, "\n----------\n" . date("Y-m-d H:i:s") . "\n JSON \n" . $data . "\n ARRAY \n" . $arr . "\n");
            fclose($fp);
        } catch (Exception $ex) {
            return;
        }
    }

    public static function datos($data) {
        try {
            
            $arr = print_r($data, true);                        

            //log de  la peticion
            $fp = fopen("../log/datos.log", "a+");
            fwrite($fp, "\n----------\n" . date("Y-m-d H:i:s") . "\n JSON \n" . $data . "\n ARRAY \n" . $arr . "\n");
            fclose($fp);
        } catch (Exception $ex) {
            return;
        }
    }
}