<?php

namespace App\Services;

use App\Models\Skill;
use Illuminate\Support\Facades\Cache;

class SkillService
{
    public function getSkills()
    {

        return Cache::remember('skill_data', now()->addDay(), function () {
            return Skill::all()->load('image');
        });
    }

    public function clearCache(): void
    {
        Cache::forget('skill_data');
    }
}
