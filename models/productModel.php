<?php
namespace models;
use models\baseModel;
use \PDO;

class productModel extends baseModel {
    const tableName = 'products';
    public function rules(){
        return ['Id','Name','QuantityInStock','Description','Price','ProductImageId'];
    }

    public static function selectAll(){
        try 
        {
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM ".self::tableName;
            $result=$conn->query($sql);
            $resArray=[];
            foreach ($result as $array) { 
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