<?php

    class ProductsController
    {
        public function index(){
            $templete = file_get_contents('app/view/products.html');

            echo $templete;
        }
        
        public function insert(){
            try {
                Cadastro::insert($_POST);
                echo '<script> location.href="http://localhost:3306/site/?pagina=products#"</script>';
            } catch (Exception $e) {
                echo '<script> alert(" '.$e->getMessage().'") </script>';
                echo '<script> location.href="http://localhost:3306/site/?pagina=register"</script>';
            }
            
           
        }
    }