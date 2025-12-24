<?php 

    require_once __DIR__ . '/../config/Database.php';

    class UsuarioModel extends Database {

        protected string $table;

        public function __construct()
        {
            parent::__construct();

            $tables = require_once __DIR__ . '/../../.env/tables.php';
            $this->table = $tables['stock_flow_system'][1] ?? ''; 
        }

        public function getAll() {
            try{
                $sql = "SELECT * FROM {$this->table}";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();

                $result = $stmt->fetchAll();

                return $result ?: [];

            }catch(PDOException $e) {
                die("ERRO NA PESQUISA =>" . $e->getMessage());
                return false;
            }catch(Exception $e) {
                die("ERRO NA PESQUISA =>" . $e->getMessage());
                return false;
            }
        }

        public function getById($id) {
            try{
                $sql = "SELECT * FROM {$this->table} WHERE id = :id";
                $stmt = $this->conn->prepare($sql);

                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                $result = $stmt->fetch();

                return $result ?: [];

            }catch(PDOException $e) {
                die("ERRO NA PESQUISA =>" . $e->getMessage());
                return false;
            }catch(Exception $e) {
                die("ERRO NA PESQUISA =>" . $e->getMessage());
                return false;
            }
        }

        public function cadastro($nome, $cpf, $email, $senha) {
            try{
                $sqlCheck = "SELECT id FROM {$this->table} WHERE email = :email OR cpf = :cpf";
                $stmtCheck = $this->conn->prepare($sqlCheck);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }

                $stmtCheck->bindValue(':email', trim($email));
                $stmtCheck->bindValue(':cpf', $cpf);
                $stmtCheck->execute();

                if($stmtCheck->fetch()) {
                    return false; // Verifica se o usuario ja existe a partir da existencia de um id que contenha determinado email OU cpf.
                }

                // ----------
                
                $sql = "INSERT INTO {$this->table} (nome, cpf, email, senha) VALUES(:nome, :cpf, :email, :senha)";
                $stmt = $this->conn->prepare($sql);

                $stmt->bindValue(':nome', $nome);
                $stmt->bindValue(':cpf', $cpf);
                $stmt->bindValue(':email', trim($email));
                $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));

                $result = $stmt->execute();

                if(!$result) {
                    return false;
                }

                return $result;

            }catch(PDOException $e) {
                die("ERRO NO CADASTRO =>" . $e->getMessage());
                return false;
            }catch(Exception $e) {
                die("ERRO NO CADASTRO =>" . $e->getMessage());
                return false;
            }
        }

        public function login($email, $senha) {
            try{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }

                $sql = "SELECT id, nome, email, senha FROM {$this->table} WHERE email = :email LIMIT 1";
                $stmt = $this->conn->prepare($sql);

                $stmt->bindValue(':email', trim($email));
                $stmt->execute();

                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                if(!$usuario) {
                    return false;
                }

                if(!password_verify($senha, $usuario['senha'])) {
                    return false; //Veirifca se a senha passada é igual a do usuario encontrado no banco!
                }

                return $usuario;

                }catch(PDOException $e) {
                    die("ERRO NO LOGIN =>" . $e->getMessage());
                    return false;
                }catch(Exception $e) {
                    die("ERRO NO LOGIN =>" . $e->getMessage());
                    return false;
                }
            }

        public function delete($id) {
            try{
                $sql = "DELETE FROM {$this->table} WHERE id = :id";
                $stmt = $this->conn->prepare($sql);

                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                $result = $stmt->execute();

                if(!$result) {
                    return false;
                }

                return $result;

            }catch(PDOException $e) {
                die("ERRO NO DELETAR =>" . $e->getMessage());
                return false;
            }catch(Exception $e) {
                die("ERRO NO DELETAR =>" . $e->getMessage());
                return false;
            }
        }

        public function update($id, $nome, $cpf, $email, $senha) {
            try{
                $sql = "UPDATE {$this->table} SET nome = :nome, cpf = :cpf, email = :email, senha = :senha WHERE id = :id";
                $stmt = $this->conn->prepare($sql);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }

                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                $stmt->bindValue(':nome', $nome);
                $stmt->bindValue(':cpf', $cpf);
                $stmt->bindValue(':email', trim($email));
                $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));

                $result = $stmt->execute();

                if(!$result) {
                    return false;
                }

                return $result;

            }catch(PDOException $e) {
                die("ERRO NO UP =>" . $e->getMessage());
                return false;
            }catch(Exception $e) {
                die("ERRO NO UP =>" . $e->getMessage());
                return false;
            }
        }
    }

?>