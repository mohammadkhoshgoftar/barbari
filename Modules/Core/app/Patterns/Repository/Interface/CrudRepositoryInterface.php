<?php

namespace Modules\Core\app\Patterns\Repository\Interface;

interface CrudRepositoryInterface
{
    public function getItemById($id);
    public function index();
    public function storeToDb($validatedData);
    public function updateToDb($validatedData , $id);
    public function show($id);
    public function deleteToDb($id);
}
