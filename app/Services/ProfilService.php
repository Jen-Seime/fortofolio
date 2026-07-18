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
        return Profil::with('image')->first();
    }

    /**
     * Membersihkan cache profil.
     */
}
