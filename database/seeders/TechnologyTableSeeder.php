<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['html', 'css', 'javascript','vue','vite','php','laravel'];
        foreach($technologies as $technology){
            $new_technology = new Technology();
            $new_technology->title = $technology;
            $new_technology->slug = Technology::generateSlug($new_technology->title);
            $new_technology->save();
        }
    }
}
