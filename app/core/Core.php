<?php

    class Core
    {
        public function start($urlPost)
        {

            if (isset($urlPost['metodo'])) {
                $acao = $urlPost['metodo'];
            } else {
                $acao = 'index';
            }

            if (isset($urlPost['pagina'])) {
                $controller = ucfirst($urlPost['pagina'].'Controller');    
            } else {
                $controller = "HomeController";
            }
            
        

            if (!class_exists($controller))
            {
             $controller = 'HomeController';   
            }

            call_user_func_array(array(new $controller,$acao), array());
       
        }
    }