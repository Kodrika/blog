<?php

use App\Models\Navigation;
use Illuminate\Database\Seeder;

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
