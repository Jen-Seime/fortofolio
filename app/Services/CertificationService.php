<?php

namespace App\Services;

use App\Models\Certification;

class CertificationService
{

    public function getCertifications()
    {
        return Certification::query()
            ->latest('issue_date')
            ->with('issuerLogo', 'pdfFile')
            ->paginate();
    }

    // public function getCertifications(int $limit = 10)
    // {
    //     return Certification::query()
    //         ->latest('issue_date')
    //         ->with('issuerLogo', 'pdfFile')
    //         ->paginate($limit);
    // }
}
