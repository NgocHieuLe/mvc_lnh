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
        $conn = DB::getInstance();
        $statement = $conn->prepare('SELECT * FROM Work');
        $statement->execute();
        $items = $statement->fetchAll();
        return $items;
    }

    static function insert($title, $start, $end, $status)
    {
        $conn = DB::getInstance();
        $query = 'INSERT INTO Work (title, startDate, endDate, status) values (:title, :startDate, :endDate, :status)';
        $stmt = $conn->prepare($query);
        $data = array(
            'title' => $title,
            'startDate' => $start,
            'endDate' => $end,
            'status' => $status
        );
        $stmt->execute($data);
        DB::getInstance()->lastInsertId();
    }

    static function update($title, $start, $end, $status, $id)
    {
        $conn = DB::getInstance();
        $query = 'UPDATE Work SET title=:title, startDate=:startDate, endDate=:endDate, status=:status WHERE idWork=:idWork';
        $stmt = $conn->prepare($query);

        $data = array(
            'title' => $title,
            'startDate' => $start,
            'endDate' => $end,
            'status' => $status,
            'idWork' => $id
        );

        $stmt->execute($data);
    }

    static function delete($id)
    {
        $conn = DB::getInstance();
        $query = 'DELETE from Work WHERE idWork=:idWork';
        $stmt = $conn->prepare($query);

        $data = array(
            'idWork' => $id
        );

        $stmt->execute($data);
    }
}
