<?php

class DbInfos {
  CONST HOST = 'localhost';
  CONST DB_NAME = 'fomantic';
  CONST USER = 'fomantic';
  CONST PASS = 'Fomantic57*';

  function __construct(){
    try {
      $db = $this->connect();
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $db= null;
        echo '<span style="color: red; font-weight: bold;">' . $e->getMessage() . '</span>';
        return;
    }
  }

  public function connect(){
    return new PDO('mysql:host='.self::HOST.';dbname='.self::DB_NAME.';charset=utf8', self::USER, self::PASS);
  }
}