<?php

    class CurriculumController
    {
        public function index()
        {
            $templete = file_get_contents('app/view/curriculum.html');

            echo $templete;

        }
    }