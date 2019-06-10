<?php
    class Usuario
    {

        function __construct(){
            session_start();
        }

        public function MostrarMensaje($mensaje, $tipo){
            $clasesInfo   = "box_info";
            $clasesError  = "box_error";
            $clasesOk     = "box_ok";
            $claseActual  = "";
            $claseMensaje = '';

            if (isset($tipo) && !empty(trim($tipo)) && isset($mensaje) && !empty(trim($mensaje))) {
                # Todo OK
                # Todo OK
                switch($tipo) {
                    case 'ok':
                        $claseActual = $clasesOk;
                        break;

                    case 'error':
                        $claseActual = $clasesError;
                        break;

                    case 'info':
                        $claseActual = $clasesInfo;
                        break;
                }
            } else {
                # Devolver box info (No se paso $tipo).
                $claseMensaje = "";
            }
            $claseMensaje = '<section class="box_mensaje '.$claseActual.'">'.$mensaje.'</section>';
            return $claseMensaje;
        }
    }
?>