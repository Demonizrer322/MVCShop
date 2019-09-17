<?php
namespace models;
use models\baseModel;
use \PDO;

    class cartModel extends baseModel {
        const tableCookie = "cookies";
        const tableProduct = "products";
        public function rules(){
            return ['IdProduct','SessionId'];
        }
        public function secondRules(){
            return ['IdProduct','SessionId','Id','Name','QuantityInStock','Description','Price','MainImage','ProductImageId'];
        }
        public function cookiesInsert(){
            try 
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO `".self::tableCookie."` (`IdProduct`,`SessionId`)
                                        VALUES (:IdProduct, :SessionId)");
                        $IdProduct = trim(htmlspecialchars($_GET['IdProduct']));
                        $SessionId = trim(htmlspecialchars($_COOKIE['sessionId']));
                    $stmt->bindParam(':IdProduct', $IdProduct);
                    $stmt->bindParam(':SessionId', $SessionId);
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
        public function cookiesSelect($Id){
            try 
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM `".self::tableCookie."`
                                        WHERE `SessionId` = :SessionId AND `IdProduct` = :IdProduct");
                        $SessionId = trim(htmlspecialchars($_COOKIE['sessionId']));
                        $IdProduct= trim(htmlspecialchars($Id));
                    $stmt->bindParam(':SessionId', $SessionId);
                    $stmt->bindParam(':IdProduct', $IdProduct);
                $stmt->execute();
                $resArray=[];
                foreach ($stmt as $row){
                    $Info = new cartModel;
                    $Info->tryMap($row);
                    array_push($resArray, $Info);
                    
                }
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
            finally
            {
                $conn = NULL;
                return $resArray;
            }
        }
        public function selectAll(){
            try 
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * 
                                        FROM `".self::tableProduct."` INNER JOIN `".self::tableCookie."` ON `Id` = `IdProduct`
                                        WHERE `SessionId` = :SessionId");
                        $SessionId = trim(htmlspecialchars($_COOKIE['sessionId']));
                    $stmt->bindParam(':SessionId', $SessionId);
                $stmt->execute();
                $resArray=[];
                foreach ($stmt as $result){
                    $model = new cartModel;
                    $model->secondTryMap($result);
                    array_push($resArray, $model);
                }
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
            finally
            {
                $conn = NULL;
                return $resArray;
            }
        }
    }