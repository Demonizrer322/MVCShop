<?php
namespace models;
use models\baseModel;
use \PDO;

class productModel extends baseModel {
    const tableName = 'products';
    public function rules(){
        return ['Id','Name','QuantityInStock','Description','Price','MainImage','ProductImageId'];
    }

    public static function selectAll($start = 0,$end = 3){
        try 
        {
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM ".self::tableName." ORDER BY Id LIMIT ".$start.", ".$end;
            $result = $conn->query($sql);
            $resArray = [];
            foreach ($result as $array) { 
                $model = new productModel;
                $model->tryMap($array);
                array_push($resArray, $model);
            }
            $limit['start'] = $start;
            $limit['end'] = $end;
            array_push($resArray, $limit);
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
    public static function singleProduct(){
        try 
        {
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM ".self::tableName;
            $stmt = $conn->prepare("SELECT * 
                                    FROM `".self::tableName."`
                                    WHERE `Id` = :Id");
                $IdProduct = trim(htmlspecialchars($_GET['IdProduct']));
                $stmt->bindParam(':Id', $IdProduct);
            $stmt->execute();
            $resArray=[];
            foreach ($stmt as $array) { 
                $model = new productModel;
                $model->tryMap($array);
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