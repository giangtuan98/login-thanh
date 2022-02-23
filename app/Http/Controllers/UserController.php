<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        // User::create([
        //     'email' => 'admin@example.com',
        //     'name' => 'giang',
        //     'password' => Hash::make('password'),
        // ]);
        // Shop::create([
        //     'email' => 'shop@example.com',
        //     'password' => Hash::make('password'),
        // ]);

        auth('web')->attempt([
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        return 'Login success';
    }

    public function loginShop(Shop $shop)
    {
        auth('shop')->login($shop);

        return redirect()->route('shop.test');
    }

    public function admin()
    {
        return auth('web')->user();
    }
}
