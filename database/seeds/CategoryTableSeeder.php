<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (config('project.demo')) {
            $item = new Category();
            $item->name = 'PHP';
            $item->slug = 'php';
            $item->description = 'PHP';
            $item->save();
        }
    }
}
