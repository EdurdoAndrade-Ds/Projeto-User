<?php

namespace app\controllers\site;

use app\classes\Flash;
use app\classes\BlockNoReason;
use app\controllers\site\User;
use app\models\activerecord\FindBy;
use app\interfaces\ControllerInterface;

class Login implements ControllerInterface
{
    public string $view;
    public array $data = [];
    public string $master = 'index.php';


    public function __construct()
    {
        // BlockNoReason::block($this, ['store']);
    }
    
    public function index(array $args)
    {
        $this->view = 'login.php';
        $this->data = [
            'title' => 'Login'
        ];
    }

    public function store()
    {
        if(!isset($_SESSION['login'])) {

            if(isset($_POST['acao'])) {
                $login = 'root';
                $senha = '1';
                $userP = 'Eduardo';
                
                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm) {
                    // Logado com sucesso
                    
                    echo 'logado com sucesso';
                    die();
                    $_SESSION['login'] = $login;
                    
                    
                    return redirect('/login');
                    // header('Location: app/views/home.php');
                } else {
                    // Algum erro ocorreu
                    echo 'Dados inválidos.';
                }
            } 

            include('login.php');
        }
        // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        // $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // $user = new User;
        // $userFound = $user->this->FindAllUser(new FindBy());

        // if (!$user) {
        //     Flash::set('login', 'Usuário ou senha inválidos');
        //     return redirect('/login');
        // }

        // $passwordMatch = password_verify($password, $userFound->password);

        // if (!$passwordMatch) {
        //     Flash::set('login', 'Usuário ou senha inválidos');
        //     return redirect('/login');
        // }
        
        // unset($userFound->password);
        
        // $_SESSION['user'] = $userFound;
        
    return redirect('/');
    }

    public function destroy(array $args)
    {
        // session_destroy();

        // unset($_SESSION['acao']);

        // return redirect('/');

        if(isset($_GET['logout'])) {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
        }
        include('home.php');
    }

    public function edit(array $args)
    {
        throw new \Exception('Method edit() is not implemented.');
    }

    public function show(array $args)
    {
        return 'index';
    }

    public function update(array $args)
    {
        throw new \Exception('Method update() is not implemented.');
    }
}
