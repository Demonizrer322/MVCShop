<?php
    namespace controllers;
    use controllers\baseController;
    use models\userModel;

    class userController extends baseController {
        public function loginAction(){
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if ($user = userModel::varification($_POST['Email']))
                {
                    $userPassword = new userModel;
                    $userPassword->Password=$_POST['Password'];
                    $password = $userPassword::passwordHasher();
                    if($password == $user->Password)
                    {
                        $this->autorizationAction($user->Email, $user->Name, $user->Surname, $user->Phone );
                        $this->render('views/home/index.php', ['layout'=>True]);
                    }
                }
            }
        }

        public function registrationAction(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $userVarification = userModel::varification($_POST['Email']);
                if(empty($userVarification)){
                    $user = new userModel;
                    if($user->tryMap($_POST)){
                        $user->insert();
                        $this->autorizationAction($user->Email, $user->Name, $user->Surname, $user->Phone);
                        $this->render('views/home/index.php', ['layout'=>True]);
                    }
                }
            }
        }
        public function logoutAction(){
            if(!isset($_SESSION)) session_start();            
            session_destroy();
            $this->render('views/home/index.php', ['layout'=>True]);
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
        public function autorizationAction($Email, $Name, $Surname, $Phone){
            if (session_status()<>2) session_start();
            $_SESSION["Autorization"] = TRUE;
            $_SESSION["Email"] = $Email;
            $_SESSION["Name"] = $Name;
            $_SESSION["Surname"] = $Surname;
            $_SESSION["Phone"] = $Phone;
        }

        public function editAction(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                 
            }
            
        }
    }