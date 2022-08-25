<?php

namespace app\controllers\site;

use Exception;
use app\models\User as UserModel;
use app\models\activerecord\FindBy;
use app\models\activerecord\FindAllUser;

class User
{
    public array $users = [];
    public string $view;
    public array $data = [];
    public string $master = 'index.php';


    public function show()
    {
        $user = (new FindAllUser)->excute();
        // $user = (new UserModel)->execute(new FindBy(field:'id', value:$args[0], fields:'id,firstName,lastName'));
        
        $users = [
            'firstName' => 'Eduardo',
            'lastName' => 'Andrade',
            'id' => '1',
        ];
        if (!$user) {
            throw new Exception('Usuário não encontrado');
        }
        
        $this->view = 'user.php';
        $this->data = [
            'title' => 'Dados do user',
            'user' => $user
        ];
    }
}
