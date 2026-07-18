<?php

namespace App\Livewire\Page;

use App\Services\SkillService;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Skill')]
class SkillPage extends Component
{
    #[Computed]
    public function skill()
    {
        return app(SkillService::class)->getSkills();
    }

    public function render()
    {

        $backend = $this->skill->where('category', 'Backend');
        $frontend = $this->skill->where('category', 'Frontend');
        $tools = $this->skill->where('category', 'Tools');

        return view('livewire.page.skill-page', [
            'backend' => $backend,
            'frontend' => $frontend,
            'tools' => $tools,
        ]);
    }
}
