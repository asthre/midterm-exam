<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder {
    public function run(): void {
        DB::table('features')->insert([
            ['name' => 'Model', 'description' => 'Represents the data structure and interacts with the database.'],
            ['name' => 'View', 'description' => 'Handles the presentation layer using Blade templates.'],
            ['name' => 'Controller', 'description' => 'Manages the logic between Models and Views.'],
            ['name' => 'Routes', 'description' => 'Defines application URL endpoints and their logic.'],
            ['name' => 'Middleware', 'description' => 'Filters HTTP requests before reaching Controllers.'],
            ['name' => 'Blade Templates', 'description' => 'Laravel’s templating engine for Views.'],
            ['name' => 'Migrations', 'description' => 'Manages database schema changes using version control.'],
            ['name' => 'Seeders', 'description' => 'Inserts initial data into the database automatically.'],
            ['name' => 'Database', 'description' => 'Handles storing, retrieving, and managing data.'],
            ['name' => 'Eloquent ORM', 'description' => 'Laravel’s database abstraction layer using Models.']
        ]);
    }
}
