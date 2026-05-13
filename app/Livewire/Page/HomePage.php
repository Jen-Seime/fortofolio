<?php

namespace App\Livewire\Page;

use Livewire\Component;

use App\Services\ProfilService;
use Livewire\Attributes\Computed;

class HomePage extends Component
{
    #[Computed]
    public function profil()
    {
        return app(ProfilService::class)->getProfil();
    }
    
    public function render()
    {
        return view('livewire.page.home-page', [
            'profil' => $this->profil
        ]);
    }
}
