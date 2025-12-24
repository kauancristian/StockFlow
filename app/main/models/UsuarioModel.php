<?php 

    require_once __DIR__ . '/../config/Database.php';

    class UsuarioModel extends Database {

        protected string $table;

        public function __construct()
        {
            parent::__construct();

            $tables = require_once __DIR__ . '/../../.env/tables.php';
            $this->table = $tables['table']['usuarios'] ?? 'usuarios'; 
        }

        public function getAll() {
            $sql = "SELECT * FROM {$this->table}";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();

            return $result ?: [];
        }

        public function getById($id) {
            $sql = "SELECT * FROM {$this->table} WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch();

            return $result ?: [];
        }

        public function insert($nome, $cpf, $email, $senha) {
            $sqlCheck = "SELECT id FROM {$this->table} WHERE email = :email OR cpf = :cpf";
            $stmtCheck = $this->conn->prepare($sqlCheck);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }

            $stmtCheck->bindValue(':email', $email);
            $stmtCheck->bindValue(':cpf', $cpf);
            $stmtCheck->execute();

            if($stmtCheck->fetch()) {
                return false; // Verifica se o usuario ja existe a partir da existencia de um id que contenha determinado email OU cpf.
            }

            

            $sql = "INSERT INTO {$this->table} (nome, cpf, email, senha) VALUES(:nome, :cpf, :email, :senha)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':cpf', $cpf);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));

            $result = $stmt->execute();

            if(!$result) {
                return false;
            }

            return $result;
        }

        public function login($email, $senha) {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }

            $sql = "SELECT id, nome, email, senha FROM {$this->table} WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':email', $email);
            $stmt->execute();

            $usuario = $stmt->fetch();

            if(!$usuario) {
                return false;
            }

            if(!password_verify($senha, $usuario['senha'])) {
                return false; //Veirifca se a senha passada é igual a do usuario encontrado no banco!
            }

            return $usuario;
        }

        public function delete($id) {
            $sql = "DELETE FROM {$this->table} WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $result = $stmt->execute();

            if(!$result) {
                return false;
            }

            return $result;
        }

        public function update($id, $nome, $cpf, $email, $senha) {
            $sql = "UPDATE {$this->table} SET nome = :nome, cpf = :cpf, email = :email, senha = :senha WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }

            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':cpf', $cpf);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));

            $result = $stmt->execute();

            if(!$result) {
                return false;
            }

            return $result;
        }
    }

?>