<?php
    namespace controllers;
    use controllers\baseController;
    use models\shopModel;

    class shopController extends baseController {
        public function indexAction(){
            $model=shopModel::selectAll();
            //var_dump($model);
            $this->render('views/product/shopThreeColumn.php', ['layout'=>True, 'model'=>$model]);
        }
    }