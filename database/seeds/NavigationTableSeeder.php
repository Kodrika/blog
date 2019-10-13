<?php

use Illuminate\Database\Seeder;
use App\Models\Navigation;

class NavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Navigation();
        $item->sort = 1;
        $item->name = 'Homepage';
        $item->url = route('web.home');
        $item->save();
    }
}
