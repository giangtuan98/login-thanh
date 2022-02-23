<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    public function test()
    {
        return auth('shop')->user();
    }

    public function logout()
    {
        return auth('shop')->logout();
    }
}
