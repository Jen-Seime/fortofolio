<?php

namespace App\Services;

use App\Models\CategoryRole;

class CategoryRoleService
{
    public function getCategoriesRoles()
    {

        return CategoryRole::all();
    }
}
