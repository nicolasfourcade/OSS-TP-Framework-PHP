<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 19/04/17
 * Time: 12:19
 */
class ConnectBdd
{
    /**
     * @var
     */
    private $connect;

    public function __construct($bdd)
    {
        $options = array(
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        );
        try{
           $cn = new PDO("mysql:dbname=oss_project;host=127.0.0.1", $bdd['user'], $bdd['pwd'],$options);
           $this->setConnect($cn);
        }catch (PDOException $e){
            throw $e;
        }

    }

    /**
     * @return mixed
     */
    public function getConnect()
    {
        return $this->connect;
    }

    /**
     * @param mixed $connect
     */
    public function setConnect($connect)
    {
        $this->connect = $connect;
    }




}