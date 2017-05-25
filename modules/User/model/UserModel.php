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

        parent::__construct($path);
        $this->adresse = new AdressModel("User");
    }

    /**
     * @return mixed
     */
    public function allUsers(){
        $query = "select * from user";
       return $this->load($query);
    }
}