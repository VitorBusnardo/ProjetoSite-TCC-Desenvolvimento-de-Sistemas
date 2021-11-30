<?php

    class ServicesController
    {
        public function index()
        {
            $templete = file_get_contents('app/view/services.html');

            echo $templete;
        }
    }