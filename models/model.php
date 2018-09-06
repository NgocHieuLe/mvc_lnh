<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 8/26/18
 * Time: 3:46 PM
 */
require_once('models/work.php');
require_once('connection.php');

class Model
{
    static function load()
    {
        $connection = Database::getInstance();
        $statement = $connection->prepare('SELECT * FROM Work');
        $statement->execute();
        $items = $statement->fetchAll();
        return $items;
    }

    static function insert($title, $start, $end, $status)
    {
        $connnection = Database::getInstance();
        $query = 'INSERT INTO Work (title, startDate, endDate, status) values (:title, :startDate, :endDate, :status)';
        $statement = $connnection->prepare($query);
        $data = array(
            'title' => $title,
            'startDate' => $start,
            'endDate' => $end,
            'status' => $status
        );
        $statement->execute($data);
        DB::getInstance()->lastInsertId();
    }

    static function update($title, $start, $end, $status, $id)
    {
        $connnection = Database::getInstance();
        $query = 'UPDATE Work SET title=:title, startDate=:startDate, endDate=:endDate, status=:status WHERE idWork=:idWork';
        $statement = $connnection->prepare($query);

        $data = array(
            'title' => $title,
            'startDate' => $start,
            'endDate' => $end,
            'status' => $status,
            'idWork' => $id
        );

        $statement->execute($data);
        DB::getInstance()->lastInsertId();
    }

    static function delete($id)
    {
        $connnection = Database::getInstance();
        $query = 'DELETE from Work WHERE idWork=:idWork';
        $statement = $connnection->prepare($query);

        $data = array(
            'idWork' => $id
        );

        $statement->execute($data);
        DB::getInstance()->lastInsertId();
    }
}
