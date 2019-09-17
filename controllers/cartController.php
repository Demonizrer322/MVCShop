<?php
namespace controllers;
use controllers\baseController;
use models\cartModel;

    class cartController extends baseController {
        public function cartAction(){
            $model = cartModel::selectAll();
            $this->render('views/product/cart.php', ['layout'=>True, 'model'=>$model]);
        }
        public function addingToCartAction(){
            $Id = $_GET['IdProduct'];
            $Key = $_COOKIE['sessionId'];
            $Info = cartModel::cookiesSelect($Id);
            if($Id == $Info[0]->IdProduct && $Key == $Info[0]->SessionId)
            {
                die("The product is already in the cart");
            } else {
                $cookies = cartModel::cookiesInsert($_GET);
            }
        }
    }