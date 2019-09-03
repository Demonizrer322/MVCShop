<?php
    namespace controllers;
    use controllers\baseController;
    class productController extends baseController {
        public function cartAction(){
            $this->render('views/product/cart.php', ['layout'=>True]);
        }
        public function compareAction(){
            $this->render('views/product/compare.php', ['layout'=>True]);
        }
        public function wishlistAction(){
            $this->render('views/product/wishlist.php', ['layout'=>True]);
        }
        public function shopThreeColumnAction(){
            $this->render('views/product/shopThreeColumn.php', ['layout'=>True]);
        }
        public function singleProductTabstyle3Action(){
            $this->render('views/product/singleProductTabstyle3.php', ['layout'=>True]);
        }
    }