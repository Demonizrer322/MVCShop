<?php
    namespace controllers;
    use controllers\baseController;
    use models\userModel;

    class userController extends baseController {
        public function loginAction(){
            
        }

        public function registrationAction(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $userVarification = userModel::varification($_POST['Email']);
                if(empty($userVarification)){
                    $user = new userModel;
                    if($user->tryMap($_POST)){
                        $user->insert();
                        $this->Autorization($user->Email);
                        $this->render('views/home/index.php', ['layout'=>True]);
                    }
                }
            }
        }
        public function checkoutAction(){
            $this->render('views/user/checkout.php', ['layout'=>True]);
        }
        public function contactAction(){
            $this->render('views/user/contact.php', ['layout'=>True]);
        }
        public function loginRegisterAction(){
            $this->render('views/user/loginRegister.php', ['layout'=>True]);
        }
        public function myAccountAction(){
            $this->render('views/user/myAccount.php', ['layout'=>True]);
        }

        public  function Autorization($login){
        if (session_status()<>2) session_start();
        $_SESSION["Autorization"]=TRUE;
        $_SESSION["login"]=$login;
        }
    
        public function ExiteAction(){
            if (session_status()<>2) session_start();
            session_unset();
            session_destroy();
            $this->render('views/user/index.php', ['layout'=>True]);
           
        }
    }