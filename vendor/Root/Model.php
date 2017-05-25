<?php

/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 03/05/17
 * Time: 11:34
 */
class Model
{
    private $cn;

    public function __construct($path)
    {
        echo "<br>";
        var_dump(__CLASS__);
        $bdd = new Bdd(MODPATH.DS.$path."/bdd.conf");
        $ncn = new ConnectBdd($bdd->load());
        $this->cn = $ncn->getConnect();
    }

    public function load($query){
        $request = $this->cn->query($query);
        $res = $request->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

}