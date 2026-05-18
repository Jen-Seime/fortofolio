<?php

namespace App\Livewire\Page;

use App\Models\CategoryRole;
use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

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
            ->when($this->category, function ($query) {
                $query->where('category_role_id', $this->category);
            })
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
