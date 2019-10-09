<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

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
