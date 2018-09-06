<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 8/26/18
 * Time: 4:05 PM
 */
require_once('controllers/base_controller.php');
require_once('models/model.php');

class WorkController extends BaseController
{
    function __construct()
    {
        $this->folder = 'work';
    }
    public function index()
    {
        return $this->render("index");
    }
    public function workLoad()
    {
        $work = array();
        $data = Model::load();
        foreach ($data as $row)
        {
            $work[] = array(
                'id' => $row["idWork"],
                'title' => $row["title"],
                'start' => $row["startDate"],
                'end' => $row["endDate"]
            );
        }
        echo json_encode($work);
    }
    public function workAdd()
    {
        if (isset($_POST['title']))
        {
            $title = $_POST["title"];
            $start = $_POST["start"];
            $end = $_POST["end"];
            $status = $_POST["status"];
            Model::insert($title, $start, $end, $status);
        }
    }
    public function workUpdate()
    {
        if (isset($_POST["id"]))
        {
            $title = $_POST["title"];
            $start = $_POST["start"];
            $end = $_POST["end"];
            $status = $_POST["status"];
            $id = $_POST['id'];
            Model::update($title, $start, $end, $status, $id);
        }
    }
    public function workDelete()
    {
        if (isset($_POST['id']))
        {
            $id = $_POST['id'];
            Model::delete($id);
        }
    }
}