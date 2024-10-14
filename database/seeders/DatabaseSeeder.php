<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     
    public function run(): void
    {

        \DB::statement('PRAGMA foreign_keys = OFF;');
        User::truncate();
        Project::truncate();
        Proposal::truncate();
        \DB::statement('PRAGMA foreign_keys = ON;'); // Reabilita as chaves estrangeiras
    

        User::factory()->count(200)->create();
        
        User::query()->inRandomOrder()->limit(10)->get()
        ->each(function (User $u) {
            
            $project = Project::factory()->create(['created_by' => $u->id]);

                Proposal::factory()->count(random_int(4, 45))->create(['project_id'=> $project->id]);
            });
    }
}
