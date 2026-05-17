<?php

namespace App\Livewire\Component;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ProjectDetail extends Component
{
    public Project $project;

    public function mount(Project $project): void
    {
        $this->project = $project->load(['image', 'thumbnails', 'category_role']);
    }

    public function render()
    {
        return view('livewire.component.project-detail', [
            'relatedProjects' => Project::with('image')
                ->where('id', '!=', $this->project->id)
                ->where('category_role_id', $this->project->category_role_id)
                ->latest('date')
                ->limit(3)
                ->get(),
        ]);
    }
}
