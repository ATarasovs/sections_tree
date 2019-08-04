<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 16:51
 */

include('config.php');
class db extends mysqli {


    // single instance of self shared among all instances
    private static $instance = null;


    // db connection config vars
    private $username = username;
    private $password = password;
    private $dbname = dbname;
    private $host = host;

    //This method must be static, and must return an instance of the object if the object
    //does not already exist.
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
    // thus eliminating the possibility of duplicate objects.
    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
    public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    private function __construct() {
        parent::__construct($this->host, $this->username, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
        parent::set_charset('utf-8');

    }
    public function dbquery($query)
    {
        if($this->query($query))
        {
            return true;
        }

    }
    public function get_result($query)
    {
        $result = $this->query($query);
        return $result;


    }
}


?>