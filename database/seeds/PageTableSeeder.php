<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (config('project.demo')) {
            $item = new Page();
            $item->name = 'About';
            $item->slug = 'about';
            $item->text = 'Deme Text';
            $item->save();
        }
    }
}
