<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class AnimalController {

    public function create()
    {
        return App::view('animal_create', ['title'=> 'New Animal']);
    }

    public function store()
    {
        Json::connect()->create([
            'type' => $_POST['type'],
            'weight' => $_POST['weight'],
            'tail' => isset($_POST['tail']) ? 1 : 0
        ]);

        return App::redirect('');
    }

    public function list()
    {
        return App::view('animal_list', ['title' => 'Animals List',
        'animals' => Json::connect()->showAll()]);
    }

    public function edit(int $id)
    {
        return App::view('animal_edit', ['title' => 'Animals Edit',
        'animal' => Json::connect()->show($id)]);
    }

    public function update(int $id)
    {
        Json::connect()->update($id, [
            'type' => $_POST['type'],
            'weight' => $_POST['weight'],
            'tail' => isset($_POST['tail']) ? 1 : 0
        ]);

        return App::redirect('');
    }

}