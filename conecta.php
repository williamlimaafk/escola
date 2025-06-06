<?php

class Conection {
  private $db;

  public function __construct() {
    $host = '';
    $user = ''; 
    $password = '';
    $database = ''; // Replace with your database name
    $port = 3306; // Default MySQL port

    try{
        $this->db = new PDO("mysql:host=$host;dbname=$database;port=$port", $user, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOE
