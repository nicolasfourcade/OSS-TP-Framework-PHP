<?php

/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 25/05/17
 * Time: 18:04
 */
class AdressModel extends Model
{

    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $id_user;
    /**
     * @var
     */
    private $street;
    /**
     * @var
     */
    private $city;
    /**
     * @var
     */
    private $code;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }


    /**
     * AdressModel constructor.
     * @param $path
     */
    public function __construct($path)
    {
        parent::__construct($path);
    }

    /**
     * @return mixed
     */
    public function getAddresses()
    {
        $query = "select * from adress";
        return $this->load($query);
    }
}