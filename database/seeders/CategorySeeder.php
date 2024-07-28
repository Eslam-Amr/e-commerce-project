<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::updateOrCreate(
            ['name' => 'phone'],
            [
                'name' => 'phone',
                ]
            );
        Category::updateOrCreate(
            ['name' => 'laptop'],
            [
                'name' => 'laptop',
                ]
            );
        Category::updateOrCreate(
            ['name' => 'clothes'],
            [
                'name' => 'clothes',
                ]
            );
    }
}
