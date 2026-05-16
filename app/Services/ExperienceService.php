<?php

namespace App\Services;

use App\Models\Experience;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class ExperienceService
{
    public function getExperience()
    {
        return Cache::remember('experience_data', now()->addDay(), function () {
            return Experience::all();
        });
    }

    public function getTotalYearsOfExperience(): int
    {
        $earliest = Experience::min('start_date');

        if (! $earliest) {
            return 0;
        }

        return Carbon::parse($earliest)->diffInYears(now());
    }

    public function clearCache(): void
    {
        Cache::forget('experience_data');
    }
}
