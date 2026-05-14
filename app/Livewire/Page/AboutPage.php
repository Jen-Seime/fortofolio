<?php

namespace App\Livewire\Page;

use App\Services\EducationService;
use App\Services\ExperienceService;
use App\Services\ProfilService;
use Livewire\Attributes\Computed;
use Livewire\Component;

class AboutPage extends Component
{
    #[Computed]
    public function tentang()
    {
        return app(ProfilService::class)->getProfil();

    }

    #[Computed]
    public function pengalamans()
    {
        return app(ExperienceService::class)->getExperience();
    }

    #[Computed]
    public function pendidikans()
    {
        return app(EducationService::class)->getEducation();
    }

    public function render()
    {
        return view('livewire.page.about-page', [
            'tentang' => $this->tentang,
            'pengalamans' => $this->pengalamans,
            'pendidikans' => $this->pendidikans,
        ]);
    }
}
