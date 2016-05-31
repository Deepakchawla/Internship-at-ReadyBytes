<?php
class DataBase
{

    private  $conn;
    private $rows = array();
    public function __construct()
    {
        $this->conn=mysqli_connect('localhost','root','root','login&registration');
    }

    public function insert($query)
    {

        mysqli_query($this->conn,$query);
    }
    public function select($query)
    {
        $row = mysqli_query($this->conn,$query);
        while($row1=mysqli_fetch_row($row))
        {
            $this->rows = $row1;
        }

        return $this->rows;

    }
}