<?php
    namespace controllers;
    use controllers\baseController;
    use models\productModel;

    class productController extends baseController {
        public function shopThreeColumnAction(){
            $model = productModel::selectAll();
            $this->render('views/product/shopThreeColumn.php', ['layout'=>True, 'model'=>$model]);
        }
        public function cartAction(){
            $this->render('views/product/cart.php', ['layout'=>True]);
        }
        public function compareAction(){
            $this->render('views/product/compare.php', ['layout'=>True]);
        }
        public function wishlistAction(){
            $this->render('views/product/wishlist.php', ['layout'=>True]);
        }
        public function singleProductTabstyle3Action(){
            $model = productModel::singleProduct();
            $this->render('views/product/singleProductTabstyle3.php', ['layout'=>True, 'model'=>$model]);
        }
        public function pagesAction(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $pageOfProducts = productModel::selectAll($_POST['start'],$_POST['end']);
                echo json_encode($pageOfProducts);
            }
        }
    }
