<?php
    namespace models;
    use models\baseModel;
    use \PDO;
    
    class userModel extends baseModel {
        const tableName = "users";
        const soult = "qwerty dvcde";

        public function rules(){
            return ['Name','Surname','Email','Password','Phone'];
        }
        public static function varification($Email){
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `Email` = :Email");
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
                $stmt = $conn->prepare("INSERT INTO `".self::tableName."` (`Name`, `Surname`, `Email`, `Password`, `Phone`)
                                VALUES (:Name, :Surname, :Email, :Password, :Phone)");
                    $Name = trim(htmlspecialchars($this->Name));
                    $Surname = trim(htmlspecialchars($this->Surname));
                    $Email = trim(htmlspecialchars($this->Email));
                    $Password = self::passwordHasher();
                    $Phone = trim(htmlspecialchars($this->Phone));
                $stmt->bindParam(':Name', $Name);
                $stmt->bindParam(':Surname', $Surname);
                $stmt->bindParam(':Email', $Email);
                $stmt->bindParam(':Password', $Password);
                $stmt->bindParam(':Phone', $Phone);
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
        public static function passwordHasher(){
            return sha1(self::soult.trim(htmlspecialchars(self::Password)).self::soult);
        }
    }