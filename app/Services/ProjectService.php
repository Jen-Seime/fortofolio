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
    public function getProjects()
    {

        return Cache::remember('projects_data', now()->addDay(), function () {
            return Project::with('image')
                ->latest('date')
                ->get();

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
