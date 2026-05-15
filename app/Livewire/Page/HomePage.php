<?php

namespace App\Livewire\Page;

use App\Services\ProfilService;
use App\Services\ProjectService;
use App\Services\ExperienceService;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HomePage extends Component
{
    #[Computed]
    public function profil()
    {
        return app(ProfilService::class)->getProfil();
    }

    #[Computed]
    public function projects()
    {
        return app(ProjectService::class)->getProjects();
    }

    #[Computed]
    public function yearsOfExperience()
    {
        return app(ExperienceService::class)->getTotalYearsOfExperience();
    }

    public function render()
    {
        return view('livewire.page.home-page', [
            'profil' => $this->profil,
            'projects' => $this->projects,
            'yearsOfExperience' => $this->yearsOfExperience,
        ]);
    }
}
