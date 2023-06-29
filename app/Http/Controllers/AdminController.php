<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    // users ================================================================================
    public function users()
    {
        $data = [
            'users' => User::all(),
        ];
        return view('admin/users', $data);
    }

    public function user(User $user)
    {
        return view('admin/user', ['user' => $user]);
    }

    public function postUser(User $user, Request $request)
    {
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect('/dashboard/users');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect('/dashboard/users');
    }

    // clothes ================================================================================
    public function clothes()
    {
        return view('admin/clothes', ['clothes' => Product::all()]);
    }

    public function getClothes(Product $product)
    {
        return view('/admin/cloth', ['cloth' => $product]);
    }

    public function updateClothes(Product $product, Request $request)
    {
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->bahan = $request->bahan;
        $product->kategori = $request->kategori;
        $product->s = $request->s ? 1 : 0;
        $product->m = $request->m ? 1 : 0;
        $product->l = $request->l ? 1 : 0;
        $product->xl = $request->xl ? 1 : 0;
        $product->save();
        return redirect('/dashboard/clothes');
    }

    public function deleteClothes(Product $product)
    {
        $product->delete();
        return redirect('/dashboard/clothes');
    }
}
