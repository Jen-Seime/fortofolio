<?php

namespace App\Livewire\Component;

use App\Services\ProfilService;
use Livewire\Component;

class Navigasi extends Component
{
    public function profil()
    {
        return app(ProfilService::class)->getProfil();
    }
    public function render()
    {
        $email = $this->profil()?->email ?? "[EMAIL_ADDRESS]";
        $instagram = $this->profil()?->instagram ?? "";
        $linkedin = $this->profil()?->linkedin ?? "";
        $github = $this->profil()?->github ?? "";
        
        return view('components.layouts.navigasi',[
            'email' => $email,
            'instagram' => $instagram,
            'linkedin' => $linkedin,
            'github' => $github,
        ]);
    }
}
