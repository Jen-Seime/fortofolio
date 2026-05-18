<?php

namespace App\Livewire\Page;

use App\Services\CertificationService;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class CertificationPage extends Component
{
    use WithPagination;

    #[Computed]
    public function Certifications()
    {
        return app(CertificationService::class)->getCertifications();
    }

    public function render()
    {
       
        return view('livewire.page.certification-page', [
            'certifications' => $this->Certifications,
        ]);
    }
}
