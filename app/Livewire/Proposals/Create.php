<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public Project $project;
    public bool $modal = true;

    #[Rule(["required","email"])]

    public string $email = '';

    #[Rule(["required","numeric", 'gt:0'])]

    public int $hours = 0;

    public function save()
    {
        $this->project->proposals()
            ->updateOrCreate(
                ['email' => $this->email],
                ['hours' => $this->hours]
            );
    }
    public function render()
    {
        return view('livewire.proposals.create');
    }
}
