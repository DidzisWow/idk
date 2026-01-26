<?php

class Database {
    private $pdo;

    public function __construct($config) {
        $config = [
            "host" => "localhost",
            "port" => 3306,
            "user" => "root",
            "password" => "",
            "dbname" => "idk",
            "charset" => "utf8mb4"
        ];
        $dsn = "mysql:" . http_build_query($config, arg_separator: ";");
    $this->pdo = new PDO($dsn);
    $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}

    public function query($sql) {
        return $this->pdo->query($sql);
    }
}