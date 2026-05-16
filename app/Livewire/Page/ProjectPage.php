<?php

namespace App\Livewire\Page;

use App\Models\CategoryRole;
use App\Services\ProjectService;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Project;

class ProjectPage extends Component

{
    use WithPagination;

    public $category = null;

    public function selectCategory($category)
    {
        $this->category = $category;
        $this->resetPage();
    }

    #[Computed]
    public function projects()
    {
        return Project::with('image')
            ->latest('date')
            ->paginate(10);
    }

    public function render()
    {

        return view('livewire.page.project-page', [
            'categories' => CategoryRole::all(),
            'data' => $this->projects,
        ]);


    }
}
