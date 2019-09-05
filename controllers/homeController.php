<?php
    namespace controllers;
    use controllers\baseController;
    class homeController extends baseController {
        public function indexAction(){
            $this->render('views/home/index.php', ['layout'=>True]);
        }
    }