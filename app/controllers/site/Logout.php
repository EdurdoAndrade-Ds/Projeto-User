<?php

namespace app\controllers\site;

use app\classes\Flash;
use app\classes\BlockNoReason;
use app\controllers\site\User;
use app\models\activerecord\FindBy;
use app\interfaces\ControllerInterface;

class Logount implements ControllerInterface
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
        $this->view = 'logout.php';
        $this->data = [
            'title' => 'Logout'
        ];
    }

    public function store()
    {
        return 'index do logout';
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
        include('admin.php');
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
