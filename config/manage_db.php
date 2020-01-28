<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class manage_db extends PDO {

    public function __construct() {
        $dsn = 'mysql:dbname=simfordakon;host=localhost';
        $username = 'root';
        $password = '';
        parent::__construct($dsn, $username, $password);
    }

    public function query($sql, $data = array()) {
        $query = parent::prepare($sql);
        return $query->execute($data);
    }

    public function query_select_row($sql, $data = array()) {
        $query = parent::prepare($sql);
        $query->execute($data);
        return $query->rowCount();
    }

    public function query_select_array($sql, $data = array()) {
        $query = parent::prepare($sql);
        $query->execute($data);
        $DataArray = array();
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $DataArray[] = $data;
        }
        $datajson = json_encode($DataArray);
        return $datajson;
    }

}
