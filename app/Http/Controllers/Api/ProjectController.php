<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $projects = Project::with('image')
            ->when($request->query('category'), function ($query, $category) {
                $query->where('category_role_id', $category);
            })
            ->latest('date')
            ->paginate(10);

        return ProjectResource::collection($projects);
    }

    public function relatedProjects(Request $request, int $category_role_id, ProjectService $service)
    {
        $related = $service->getrelatedProjects($category_role_id);

        return ProjectResource::collection($related);
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
    public function show(string $slug)
    {
        $project = Project::with('image', 'thumbnails', 'category_role')->where('slug', $slug)->firstOrFail();

        return new ProjectResource($project);
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
