<?php

namespace app\controllers\site;

use app\interfaces\ControllerInterface;

class Product implements ControllerInterface
{
    public array $data = [];
    public string $view;
    public string $master = 'index.php';


    public function index(array $args)
    {
        $this->view = 'edit.php';
        $this->data = [
            'title' => 'Edit'
        ];
    }

    public function edit(array $args)
    {
        $this->view = 'edit.php';
        $this->data = [
            'title' => 'Edit'
        ];
    }

    public function show(array $args)
    {
        
    }

    public function update(array $args)
    {
        // TODO: Implement update() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function destroy(array $args)
    {
        // TODO: Implement destroy() method.
    }
}
