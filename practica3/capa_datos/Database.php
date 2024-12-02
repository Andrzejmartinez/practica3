<?php
require_once 'config.php';

class Database {
    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
    }

    public function execute($query, $params = []) {
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute($params);
    }

    public function fetch($query, $params = []) {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
