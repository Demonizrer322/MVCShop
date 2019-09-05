<?php
    namespace models;
    use models\baseModel;
    use \PDO;
    
    class userModel extends baseModel {
        // public function insertAction(){
        //     if ($_SERVER ["REQUEST_METHOD"] == "POST"){
        //         $conn=new mysqli(ServerName, UserName, Password, DBName);
        //         $Password=PasswordHasher($_POST['Password']);
        //         $Email = $_POST['Email'];
        //         $sql = "SELECT * FROM `users` WHERE `login`='{$login}'";
        //         $result=$conn->query($sql);
        //         if ($result->num_rows<1){
        //             $stmt = $conn->prepare("INSERT INTO `vshop` (`Name`,`Surname`,`Patronym`,`Email`,`Password`,`Phone`,`Age`) VALUES (?,?,?,?,?,?,?)");
        //             $stmt->bind_param("sssssss", $Name, $Surname, $Patronym, $Email, $Password, $Phone, $Age);
        //                 $Name = trim(htmlspecialchars($_POST['Name']));
        //                 $Surname = trim(htmlspecialchars($_POST['Surname']));
        //                 $Patronym = trim(htmlspecialchars($_POST['Patronym']));
        //                 $Email = trim(htmlspecialchars($Email));
        //                 $Password = trim(htmlspecialchars($Password));
        //                 $Phone = trim(htmlspecialchars($_POST['Phone']));
        //                 $Age = trim(htmlspecialchars($_POST['Age']));
        //             if($stmt->execute())
        //             {
        //                 Autorization($Email);
        //                 header("Location: index.php");
        //             }
        //         $stmt->close();
        //         $conn->close();
        //         }
        //     }
        // }
        const tableName = 'users';
        const soult = "qwerty dvcde";

        public function rules(){
            return ['Name','Surname','Email','Password','Phone'];
        }
        public static function varification($Email){
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `Email`= :Email");
            $stmt->bindParam(':Email', $Email);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $userVarification = new userModel;
                $userVarification->tryMap($row);                
                return $userVarification;
            }
        }
        public function insert(){
            try 
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO `".self::tableName."` (`Name`, `Surname`, `Patronym`, `Email`, `Password`, `Phone`, `Age`)
                                VALUES (:Name, :Surname, :Patronym, :Email, :Password, :Phone, :Age)");
                    $Name = trim(htmlspecialchars($this->Name));
                    $Surname = trim(htmlspecialchars($this->Surname));
                    // $Patronym = trim(htmlspecialchars($this->Patronym));
                    $Email = trim(htmlspecialchars($this->Email));
                    $Password = $this->passwordHasher();
                    $Phone = trim(htmlspecialchars($this->Phone));
                    // $Age = trim(htmlspecialchars($this->Age));
                $stmt->bindParam(':Name', $Name);
                $stmt->bindParam(':Surname', $Surname);
                $stmt->bindParam(':Patronym', $Patronym);
                $stmt->bindParam(':Email', $Email);
                $stmt->bindParam(':Password', $Password);
                $stmt->bindParam(':Phone', $Phone);
                $stmt->bindParam(':Age', $Age);
                $stmt->execute();
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
            finally
            {
                $conn = NULL;
            }

        }

        public function passwordHasher(){
            
            return sha1(self::soult.trim(htmlspecialchars($this->Password)).self::soult);
        }
    }