<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileService
{
    public function validateUpdateData()
    {
        $input = request()->all();

        $rules = [
            'name' => 'required',
            'email' => 'required',
        ];
        if(!empty($input['password'])){
            $rules['password'] = 'required|string|min:6|pwned';
        }
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            redirect()->back()->withInput()->withErrors($validator->messages())->throwResponse();
        }

        return $input;
    }

    public function updateData()
    {
        $input = request()->all();
        $item =  User::find(1);
        $item->name = $input['name'];
        $item->email = $input['email'];
        if(!empty($input['password'])){
            $item->password = Hash::make($input['password']);
        }
        $item->save();

        redirect()->back()->with(['OK' => true])->throwResponse();
    }

}
