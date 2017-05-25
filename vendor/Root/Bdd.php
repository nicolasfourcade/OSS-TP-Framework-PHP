<?php

/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 19/04/17
 * Time: 12:03
 */
class Bdd
{
    /**
     * @var
     */
    private $path;
    /**
     * @var
     */
    private $file;
    /**
     * @var string
     */
    private $json="";
    /**
     * @var array
     */
    private $info=array();


    /**
     * Bdd constructor.
     * @param $f
     */
    function __construct($f)
    {
        $this->path = $f;
        $this->load();
    }

    /**
     *
     */
    public function loadFile(){
        try{
            $this->readFile();
            $this->json = fgets($this->file);
        }catch (Exception $e){
            echo 'Caught Exception : Error reading file '.$this->path;
        }

    }

    /**
     *
     */
    public function readFile(){
        try{
            $this->file =fopen($this->path, "r");

        }catch (Exception $e){
            echo 'Caught Exception : Can not open bdd config file '.$this->path;
        }
    }

    /**
     * @return array|mixed
     */
    public function load(){
        try{
            $this->loadFile();

            $this->info = json_decode($this->json,true);
        }catch (Exception $e){
            echo 'Caught Exception : could not create object bdd';
        }
        return $this->info;

    }
}