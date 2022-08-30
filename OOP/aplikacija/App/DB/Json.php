<?php

namespace App\DB;

class Json implements DataBase{

    private $data;

    private function __construct()
    {
        if(!file_exists(DIR . 'DB/data.json')){
            file_put_contents(DIR . 'DB/data.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR . 'DB/data.json'), 1); 
    } 

    private function getId() : int
    {
        if(!file_exists(DIR . 'DB/data_id.json')){
            file_put_contents(DIR . 'DB/data_id.json', json_encode(0));
        }
        $id = json_decode(file_get_contents(DIR . 'DB/data_id.json'));
        $id++;
        file_put_contents(DIR . 'DB/data_id.json', json_encode($id));
        return $id;
    }

    public function __destruct()
    {
        file_put_contents(DIR . 'DB/data.json', json_encode($this->data));
    }

    public function create(array $animalData) : void
    {
        $animalData['id'] = $this->getId();
        $this->data[] = $animalData;
    }

    public function update(int $animalId, array $animalData) : void
    {
        foreach($this->data as &$animal){
            if($animal['id'] == $animalId){
                $animalData['id'] = $animalId;
                $animal = $animalData;
                break;
            }
        }
    }

    public function delete(int $animalId) : void
    {
        foreach($this->data as $index => $animal){
            if($animal['id'] == $animalId){
                unset($this->data[$index]);
                $this->data = array_values($this->data);
                break;
            }
        }
    }

    public function show(int $animalId) : array
    {
        foreach($this->data as $animal){
            if($animal['id'] == $animalId){
                return $animal;
            }
        }
    }

    public function showAll() : array
    {
        return $this->data;
    }

}