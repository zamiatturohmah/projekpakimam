<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request){
    $validate = $request->validate([
        'email'=>['required','email'],
        'password'=>['required']
    ]);
    if (Auth::attempt($validate)){
        return redirect('/user');
    }
    return redirect()->back()->with('pesanLogin', 'MAAF LOGIN ANDA GAGAL');
    }
    public function user(Request $request){
        $data['user'] = User::all();
        $data['produk'] = Product::all();
        $data['total_user'] = $data ['user']->count();
        return view('template', $data);
    }
    public function show(Request $request){
        $user = auth()->user();
        $data['product'] = product::find($request->id);
        return view ('show', compact('user'), $data);
    }
    public function detailProduk(Request $request){
        $user = auth()->user();
        $data['product'] = product::find($request->id);
        return view ('detail_produk', compact('user'), $data);
    }
    public function finalcheckout(){
        return view('finalcheckout');
    }
    public function checkout(){
    }
}

