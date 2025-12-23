<?php 

    class Database {

        protected ?PDO $conn = null;

        public function __construct()
        {
            $this->connect();
        }

        public function connect():void {
            try{
                $config = require_once __DIR__ . '/../../.env/config.php';

                $host = $config['local']['host'] ?? '';
                $dbname = $config['local']['dbname'] ?? '';
                $user = $config['local']['user'] ?? '';
                $password = $config['local']['password'] ?? '';

                $this->conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8;", $user, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                echo "Conexão realizada!";

            }catch(PDOException $e) {
                die("ERRO! Conexão não realizada!" . $e->getMessage());
                $this->conn = null;
            };
        }

        public function getConnect(): ?PDO {
            return $this->conn;
        }
    }

    $db = new Database();
    $conn = $db->getConnect();
?>