<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryRoleResource;
use App\Services\CategoryRoleService;
use Illuminate\Http\Request;

class CategoryRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryRoleService $service)
    {
        $categoryRoles = $service->getCategoriesRoles();

        return CategoryRoleResource::collection($categoryRoles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
