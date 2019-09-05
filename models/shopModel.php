<?php
namespace models;
use models\baseModel;
use \PDO;

class shopModel extends baseModel {
    const tableName = 'products';
    public function rules(){
        return ['Id','Name','QuantityInStock','Discription','Price','Category','ProductImage'];
    }

    public static function selectAll(){
        try 
        {
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $stmt = $conn->prepare("SELECT * FROM `products`");
            // $stmt->execute();
            $sql="SELECT * FROM ".self::tableName;
            $result=$conn->query($sql);
            $resArray=[];
            foreach ($result as $array) { 
                $model=new shopModel;
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