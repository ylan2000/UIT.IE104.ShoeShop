<?php
class Database
{
    public $conn;
    public $error;

    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "ie104project";

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}
