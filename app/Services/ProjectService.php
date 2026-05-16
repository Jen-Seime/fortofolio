<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class ProjectService
{
    /**
     * Mengambil data project.
     * Menggunakan cache selama 24 jam untuk performa.
     */
    public function getProjects($page = 1, $category = null)
    {
        $cacheKey = 'projects_data'.$page.$category;

        return Cache::remember($cacheKey, now()->addDay(), function () use ($category) {
            return Project::with('image')
                ->when($category, function ($query) use ($category) {
                    $query->where('category_role_id', $category);
                })
                ->latest('date')
                ->paginate(9);

        });
    }

    /**
     * Mengambil project pilihan/featured.
     */
    public function getFeaturedProjects($limit = 3)
    {
        return Project::with('image')
            ->where('is_featured', true)
            ->latest('date')
            ->limit($limit)
            ->get();
    }

    /**
     * Membersihkan cache projects.
     */
    public function clearCache(): void
    {
        Cache::forget('projects_data');
    }
}
