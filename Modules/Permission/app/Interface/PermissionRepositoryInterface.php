<?php

namespace Modules\Permission\app\Interface;

interface PermissionRepositoryInterface
{
    public function index();
    public function updateToDb();

    public function sync($validateData);
}
