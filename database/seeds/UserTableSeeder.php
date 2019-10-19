<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new User();
        $item->name = 'Demo Acc';
        $item->email = 'test@test.com';
        $item->password = Hash::make('123456');
        $item->google2fa_secret = '11111';
        $item->save();
    }
}
