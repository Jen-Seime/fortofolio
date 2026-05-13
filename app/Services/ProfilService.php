<?php

namespace App\Services;

use App\Models\Profil;
use Illuminate\Support\Facades\Cache;

class ProfilService
{
    /**
     * Mengambil data profil pertama beserta relasi gambarnya.
     * Menggunakan cache selama 24 jam untuk performa.
     */
    public function getProfil(): ?Profil
    {
        return Cache::remember('profil_data', now()->addDay(), function () {
            return Profil::with('image')->first();
        });
    }

    /**
     * Membersihkan cache profil.
     */
    public function clearCache(): void
    {
        Cache::forget('profil_data');
    }
}
