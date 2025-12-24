<?php 

    require_once __DIR__ . '/../models/UsuarioModel.php';

    class UsuarioController{

        private UsuarioModel $model;

        public function __construct()
        {
            $this->model = new UsuarioModel();
        }

        public function getAll() {
            return $this->model->getAll();
        }

        public function getById($id) {
            return $this->model->getById($id);
        }

        public function cadastrar($nome, $cpf, $email, $senha) {
            return $this->model->insert($nome, $cpf, $email, $senha);
        }

        public function login($email, $senha) {
            $usuario = $this->model->login($email, $senha);

            if(!$usuario) {
                return false;
            }

            session_start();

            $_SESSION['usuario'] = [
                'id' => $usuario['id'],
                'nome' => $usuario['nome'],
                'email' => $usuario['email']
            ];

            return true;
        }

        public function delete($id) {
            return $this->model->delete($id);
        }

        public function update($id, $nome, $cpf, $email, $senha) {
            return $this->model->update($id, $nome, $cpf, $email, $senha);
        }

    }

?>