<?php

namespace App\Livewire\Page;

use App\Models\CategoryRole;
use App\Models\Project;
use Illuminate\Pagination\LengthAwarePaginator;
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

   
    public function loadProjects()
    {


        $data = Project::with('image')
            ->when($this->category, function ($query) {
                $query->where('category_role_id', $this->category);
            })
            ->latest('date')
            ->paginate(10);


        return $data;
    }

    public function render()
    {
        return view('livewire.page.project-page', [
            'categories' => CategoryRole::all()
        ]);
    }
}
