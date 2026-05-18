<?php

namespace App\Livewire\Component;

use App\Models\Certification;
use App\Models\Project;
use Livewire\Component;

class CertificationDetail extends Component
{
    public Certification $certification;

    public function mount(Certification $certification)
    {
        $this->certification = $certification->load(['issuerLogo', 'pdfFile']);
    }

    

    public function render()
    {
        return view('livewire.component.certification-detail');
    }
}
