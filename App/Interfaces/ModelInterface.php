<?php

namespace App\Interfaces;

interface ModelInterface {

    public function create($entity);

    public function getList();

    public function getOne($id);

    public function update($id);

    public function delete($id);
}