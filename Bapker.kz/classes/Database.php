<?php

// PDO namespace
use PDO;

// database class
class Database {
    private $db;
    public function __construct() {
        // file db_info returns array of info for connect to db
        $db_info = require 'path/to/db_info.php';
        // Connect DB
        $this->db = new PDO('mysql:host=' . $db_info['host'] . ';dbname=' . $db_info['dbname'], $db_info['login'], $db_info['password']);
    }

    // SQL query method
    public function query($sql, $params = []) {
        // Подготовка запроса
        $stmt = $this->db->prepare($sql);

        // Обход массива с параметрами
        // и подставление значений
        if ( !empty($params) ) {
            foreach ($params as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
        }

        // Выполняем запрос
        $stmt->execute();
        // Возвращаем ответ
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // getAll() - двумерный массив, индексированный числами по порядку
    // getRow() - одномерный массив, первую строку результата

    public function getAll($table, $sql = '', $params = [])
    {
        return $this->query("SELECT * FROM $table" . $sql, $params);
    }

    public function getRow($table, $sql = '', $params = [])
    {
        $result = $this->query("SELECT * FROM $table" . $sql, $params);
        return $result[0];
    }
}