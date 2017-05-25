<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 03/05/17
 * Time: 11:33
 */

class UserModel extends Model
{

    private $adresse;
    /**
     * UserModel constructor.
     * @param $path
     */
    public function __construct($path)
    {
        echo "<br>";
        var_dump(__CLASS__);
        parent::__construct($path);
        $this->adresse = new AdressModel("User");
        var_dump($this->adresse);
    }

    /**
     * @return mixed
     */
    public function allUsers(){
        $query = "select * from user";
       return $this->load($query);
    }
}