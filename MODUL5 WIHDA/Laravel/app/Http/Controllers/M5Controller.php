<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowroomM5;

class M5Controller extends Controller
{
    public function index()
    {
        $mobil=ShowroomM5::orderBy('id')->get();
        return view('layout_m5.list-car', compact('mobil'));
        return view('layout_m5.detail', compact('mobil'));
    }
    public function create()
    {
        // return view('register');
        return view('layout_m5.add');
    }
    public function store(Request $request)
    {
        // $imgName = $request->img_path->getClientOriginalName() . '-' . time()
        // . '-' . $request->img_path->extension();
        // $request->img_path->move(public_path('image'), $imgName);

        ShowroomM5::create([
            'name'=>$request ->nama_mobil,
            'owner'=>$request ->pemilik_mobil,
            'brand'=>$request ->merk_mobil,
            'purchase_date'=>$request ->tanggal_beli,
            'description'=>$request ->deskripsi,
            'image'=>$request ->foto_mobil,
            'status'=>$request ->status_pembayaran
        ]);
        // UserM5::create([
        //     'name'->$request ->nama,
        //     'email'->$request ->email_pengguna,
        //     'no_hp'->$request ->nomer,
        //     'password'->$request ->sandi,
        // ]);
        return view('/layout_m5/list-car');
    }
    // public function edit($id)
    // {
    //     $mobil = ShowroomM5::find($id);
    //     return view('layout_m5.edit', compact('mobil'));

    //     $user = UserM5::find($id);
    //     return view('layout_m5.profil', compact('user'));
    // }
    // public function update(Request $request, $id)
    // {
    //     $mobil = ShowroomM5::find($id);

    //     $imgName = $product->img_path;
    //     if ($request->img_path){
    //         $imgName = $request->img_path->getClientOriginalName() . '-' .time()
    //         . '-' . $request->img_path->extension();
    //         $request->img_path->move(public_path('image'), $imgName);
    //     }

    //     ShowroomM5::find($id)->update([
    //         'name'->$request ->nama_mobil,
    //         'owner'->$request ->pemilik_mobil,
    //         'brand'->$request ->merk_mobil,
    //         'purchase_date'->$request ->tanggal_beli,
    //         'description'->$request ->deskripsi,
    //         'image'->$imgName,
    //         'status'->$request ->status_pembayaran
    //     ]);
    //     $user = UserM5::find($id);
    //     UserM5::find($id)->update([
    //         'name'->$request ->nama,
    //         'email'->$request ->email_pengguna,
    //         'no_hp'->$request ->nomer,
    //         'password'->$request ->sandi,
    //     ]);
    //     return redirect('/layout_m5');
    // }
    // public function destroy($id)
    // {
    //     ShowroomM5::find($id)->delete();
    //     UserM5::find($id)->delete();
    // }
}

?>