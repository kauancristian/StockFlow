<?php 

    require_once __DIR__ . '/../main/controllers/UsuarioController.php';

    $controller = new UsuarioController();

    $action = $_GET['action'] ?? '';

    switch($action) {

        case 'login':
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';

            if($controller->login($email, $senha)) {
                header('Location: ../main/views/gerenciamento.php');
                exit;
            }

            header('Location: ../main/views/login.php?erro=1');
            exit;
        break;    

        case 'cadastro': // Funcionando
            $nome = $_POST['nome'] ?? '';
            $cpf = $_POST['cpf'] ?? '';
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';

            if($controller->cadastrar($nome, $cpf, $email, $senha)) {
                header('Location: ../main/views/login.php?cadastro_ok=1');
                exit;
            }

            header('Location: ../main/views/login.php?cadastro_erro=1');
            exit;
        break; 
    }

?>