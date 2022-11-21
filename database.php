<?php

use Database as GlobalDatabase;

define ('ENV', 'test');

class DataBase 
{
    public static function getConnection()
    {   
        $db = 'mysql:host=localhost; dbname=donkeycar';
        $userDB = 'root';
        $passDB = '';
        
        try {
            $pdo = new PDO($db, $userDB, $passDB);
        } 
        catch (PDOException $pe){
            if(ENV === 'test'){
                echo $pe->getMessage();
            } else {
                header('error.php');
            }
        }

        return $pdo;
    }

    public static function bind(string $sql, array $data):void 
    {
        $stmt = (Database::getConnection())->prepare($sql);
        foreach($data as $key=>$param){
            $stmt->bindValue($key, $param, PDO::PARAM_STR);
        }
        $stmt -> execute();
    }

    public static function insertReservation(
        array $data = [
            "id" => "",
            "start_date" => "",
            "end_date" =>"",
            "client_id" =>"",
            "vehicle_id" =>"",
        ]): void
    {
        $cols = implode(", ", array_keys($data));

        $sql = "INSERT INTO reservation (" . $cols . ") VALUES (:id, :start_date, :end_date, :client_id, :vehicle_id)";

        Database::bind($sql, $data);
    }

    public static function insertclient(
        array $data = [
            "id" => "",
            "civility" => "",
            "firstname" => "",
            "lastname" => "",
            "birthday" => "",
            "address" => "",
            "postal_code" => "",
            "city" => "",
            "email" => "",
            "tel_number" => "",
            "license_drivers" => "",
        ]): void
    {
        $cols = implode(", ", array_keys($data));

        $sql = "INSERT INTO client (" . $cols . ") VALUES (:id, :civility, :firstname, :lastname, :birthday, :address, :postal_code, :city, :email, :tel_number, :license_drivers)";

        Database::bind($sql, $data);
    }

    public static function insertmark(
        array $data = [
            "id" => "", 
            "name_mark" => "", 
        ]): void
    {
        $cols = implode(", ", array_keys($data));

        $sql = "INSERT INTO mark (" . $cols . ") VALUES (:id, :name_mark)";

        Database::bind($sql, $data);
    }

    public static function insertmodel(
        array $data = [
            "id" => "", 
            "name_model" => "", 
            "mark_id" => "", 
        ]): void
    {
        $cols = implode(", ", array_keys($data));

        $sql = "INSERT INTO model (" . $cols . ") VALUES (:id, :name_mark, :mark_id)";

        Database::bind($sql, $data);
    }

    public static function insertvehicle(
        array $data = [
            "id" => "", 
            "registre_number" => "", 
            "color" => "", 
            "nbseat" => "", 
            "date_circulation" => "", 
            "price_day" => "", 
            "insurance" => "", 
            "km" => "", 
            "model_id" => "", 
            "fuel" => "", 
        ]): void
    {
        $cols = implode(", ", array_keys($data));

        $sql = "INSERT INTO model (" . $cols . ") VALUES (:id, :registre_number, :color, :nbseat, :date_circulation, :price_day, :insurance, :km, :model_id, :fuel)";

        Database::bind($sql, $data);
    }


    public static function insertoffice(
        array $data = [
            "id" => "", 
            "adress" => "", 
            "postal_code" => "", 
            "city" => "", 
        ]): void
    {
        $cols = implode(", ", array_keys($data));

        $sql = "INSERT INTO office (" . $cols . ") VALUES (:id, :adress, :postal_code, :city)";

        Database::bind($sql, $data);
    }

    public static function insertimage(
        array $data = [
            "id" => "", 
            "image_res" => "", 
            "vehicle_id" => "", 
            "reservation_id" => "", 
        ]): void
    {
        $cols = implode(", ", array_keys($data));

        $sql = "INSERT INTO office (" . $cols . ") VALUES (:id, :image_res, :vehicle_id, :reservation_id)";

        Database::bind($sql, $data);
    }


    public static function update(string $table, array $data, int $id): void 
    {   
        foreach($data as $key=>$values){
            if(is_null($values)){
                $newData[] = $key . " = ' ' ";
            } else {
                $newData[] = $key . " = '" . $values . "'";
            }
        }
        $cols = implode(", ", $newData);

        $sql = "UPDATE " . $table . " SET " . $cols . " WHERE id_" . $table . "= :id";

        $stmt = (Database::getConnection())->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}